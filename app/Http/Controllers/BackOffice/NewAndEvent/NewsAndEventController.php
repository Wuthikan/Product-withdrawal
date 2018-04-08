<?php

namespace DurianSoftware\Http\Controllers\BackOffice\NewsAndEvent;

use Auth;
use DB;
use DateTime;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\BackOffice\NewsAndEvent\NewsAndEventRequest;
use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Excel;
use Response;

class NewsAndEventController extends Controller
{
    public $perPage = 15;
    
    public $path = 'news-events';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = NewsAndEvent::with(['user'])->withTrashed();
        $appends = [];
        $fieldList = ['title' => 'name',
            'description' => 'description',
            'end_date' => 'date',
            'status' => 'status'
        ];
        $sortBy = $request->input('sortBy', 'id');
        if ($request->has('sortBy') && in_array($sortBy, $fieldList)) {
            if ($request->has('sort') && in_array($request->input('sort'), ['asc', 'desc'])) {
                $sort = $request->input('sort');
                if ($sortBy == 'status') {
                    $sort = $request->input('sort') == 'asc' ? 'desc' : 'asc';
                }
                $model = $model->orderBy(array_search($sortBy, $fieldList), $sort);
                $appends['sortBy'] = $sortBy;
                $appends['sort'] = $request->input('sort');
            }
        }
        $model = $model->orderBy('id', 'desc');
        if ($request->has('search')) {
            $data_search = $request->search;
            $model = NewsAndEvent::with(['user'])->withTrashed()->where('title', 'LIKE', "%{$data_search}%")
                ->orWhere('description', 'LIKE', "%{$data_search}%")
                ->orWhere('image', 'LIKE', "%{$data_search}%")
                ->orWhere('news_events_date', 'LIKE', "%{$data_search}%")
                ->orWhere('start_date', 'LIKE', "%{$data_search}%")
                ->orWhere('end_date', 'LIKE', "%{$data_search}%")
                ->orWhere('status', 'LIKE', "%{$data_search}%")
                // ->orWhereHas('user', function ($query) use ($data_search){
                //     $query->where('first_name', 'like', "%{$data_search}%");
                //     $query->orWhere('last_name', 'like', "%{$data_search}%");
                // })
                ->orderBy($request->input('rdoBy', 'id'), $request->input('rdoOrder', 'asc'))->paginate($this->perPage);
            $appends['search'] = $data_search;
            $model = $model->appends($appends);
            $data['data'] = $model;
        } else {
            $data['data'] = $model->paginate($this->perPage)->appends($appends);
        }
        return view('backOffice.newsAndEvent.index')->with('data', $data);
    }

   
    public function excel(Request $request, Excel $excel)
    {
        $headers = [
                'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0',
                'Content-type'        => 'text/csv;charset=UTF-8',
                'Content-Encoding'      => 'UTF-8',
                'Content-Disposition' => 'attachment; filename=newsandevent.csv',
                'Expires'             => '0',
                'Pragma'              => 'public'
        ];

        $query = NewsAndEvent::select(
            'title as Title',
            'description as Description',
            'news_events_date as Event date',
            'start_date as Start date',
            'end_date as End date',
            'created_at as Created at',
            'updated_at as Updated at',
            'deleted_at as Deleted at'
        );

        if ($request->has('search')) {
            $data_search =  $request->input('search');
            $query->where('title', 'LIKE', "%{$data_search}%")
                ->orWhere('description', 'LIKE', "%{$data_search}%")
                ->orWhere('image', 'LIKE', "%{$data_search}%")
                ->orWhere('news_events_date', 'LIKE', "%{$data_search}%")
                ->orWhere('start_date', 'LIKE', "%{$data_search}%")
                ->orWhere('end_date', 'LIKE', "%{$data_search}%")
                ->orWhere('status', 'LIKE', "%{$data_search}%");
        }
        $list = $query->orderBy(
            $request->input('rdoBy', 'title'),
            $request->input('rdoOrder', 'asc')
        )->withTrashed()->get()->toArray();
        
        # add headers for each column in the CSV download
        array_unshift($list, array_keys($list[0]));

        $callback = function () use ($list) {
            $FH = fopen('php://output', 'w');

            foreach ($list as $row) {
                fputcsv($FH, $row);
            }
            fclose($FH);
        };

        echo "\xEF\xBB\xBF"; // UTF-8 BOM
        return Response::stream($callback, 200, $headers); //use Illuminate\Support\Facades\Response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $action = route('backOffice.news-and-event.store');

        return view('backOffice.newsAndEvent.create', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsAndEventRequest $request)
    {
        $request['news_events_date'] = DateTime::createFromFormat(
            'd/m/Y',
            $request->input('news_events_date')
        )->format('Y-m-d');
        $request['start_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('start_date')
        )->format('Y-m-d H:i:s');
        $request['end_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('end_date')
        )->format('Y-m-d H:i:s');

        $fileUploaded = $this->uploadFile($request->file('image'));

        if ($fileUploaded === '') {
            return redirect()->route('backOffice.news-and-event.create')->with('error', 'Upload failure');
        } else {
            $model = NewsAndEvent::create(array_merge($request->except('_token'), ['image' => $fileUploaded]));
            return redirect()->route('backOffice.news-and-event.index')->with('success', 'Create success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsevent = NewsAndEvent::find($id);
        $this->checkDelete($newsevent);
        return view('backOffice.newsAndEvent.show')
            ->with('newsevent', $newsevent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsevent = NewsAndEvent::find($id);
        $this->checkDeleteWithMsg($newsevent, "Data not found");
        if (empty($newsevent)) {
            return redirect()->route('backOffice.news-and-event.index')->with('warning', " Data not found ");
        }
        $edit = true;
        $action = route('backOffice.news-and-event.update', $newsevent->id) ;
        return view('backOffice.newsAndEvent.create', compact('action', 'edit'))->with('newsevent', $newsevent);
    }

    public function duplicate($id)
    {
        $newsevent = NewsAndEvent::find($id);
        $this->checkDeleteWithMsg($newsevent, "Data not found");
        $action = route('backOffice.news-and-event.store-duplicate') ;
        return view('backOffice.newsAndEvent.create', compact('action'))->with('newsevent', $newsevent);
    }


    public function storeDuplicate(NewsAndEventRequest $request)
    {
        $postData = $request->except('_token');



        $postData['news_events_date'] = DateTime::createFromFormat(
            'd/m/Y',
            $request->input('news_events_date')
        )->format('Y-m-d');
        $postData['start_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('start_date')
        )->format('Y-m-d H:i:s');
        $postData['end_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('end_date')
        )->format('Y-m-d H:i:s');

        if (!$request->has('image')) {
            $postData['image'] = $postData['_image'];
        } else {
            $fileUploaded = $this->uploadFile($request->file('image'));
            $postData['image'] = $fileUploaded;
        }

        $model = NewsAndEvent::create($postData);

        return redirect()->route('backOffice.news-and-event.index')->with('success', 'Create success');
    }

    // update name
    public function patchStatus(Request $request, $id)
    {
        try {
            $model = NewsAndEvent::where('id', $id)
                ->update([
                    'status' => $request->input('status')
                ]);
            
            echo 1;
        } catch (\Illuminate\Database\QueryException $e) {
            echo 0;
        }
    }
        
    // Destroy many data
    public function destroyMany(Request $request)
    {
        DB::beginTransaction();
        try {
            foreach ($request->input('item') as $id) {
                $model = NewsAndEvent::withTrashed()->find($id);
                if ($model == null) {
                    continue;
                }
                if ($model->trashed()) {
                    $model->forceDelete();
                    continue;
                }
                $model->delete();
            }
            DB::commit();
            echo 1;
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            echo 0;
        }
    }

    public function approveMany(Request $request)
    {
        DB::beginTransaction();
        try {
            foreach ($request->input('item') as $id) {
                $model = NewsAndEvent::withTrashed()->find($id);
                if ($model == null) {
                    continue;
                }
               
                $model->update(['status'=>'on']);
            }
            DB::commit();
            echo 1;
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            echo 0;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsAndEventRequest $request, $id)
    {
        $postData = $request->except(['_token', '_method', '_image']);

        $postData['news_events_date'] = DateTime::createFromFormat(
            'd/m/Y',
            $request->input('news_events_date')
        )->format('Y-m-d');
        $postData['start_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('start_date')
        )->format('Y-m-d H:i:s');
        $postData['end_date'] = DateTime::createFromFormat(
            'd/m/Y H:i',
            $request->input('end_date')
        )->format('Y-m-d H:i:s');
        
        $newsevent = NewsAndEvent::where('id', $id);
        $this->checkDeleteWithMsg($newsevent->first(), "Can't Edit Data");
        if (!$request->has('image')) {
            $newsevent->update($postData);
            return redirect()->route('backOffice.news-and-event.index')->with('success', 'Update success');
        } else {
            $fileUploaded = $this->uploadFile($request->file('image'));

            if ($fileUploaded === '') {
                return redirect()->route('backOffice.news-and-event.index')->with('error', 'Upload failure');
            } else {
                $newsevent->update(array_merge($postData, ['image' => $fileUploaded]));
                return redirect()->route('backOffice.news-and-event.index')->with('success', 'Update success');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsevent = NewsAndEvent::withTrashed()->find($id);
        $this->checkDelete($newsevent);
        if ($newsevent->trashed()) {
            $newsevent->forceDelete();
            return redirect()->route('backOffice.news-and-event.index')
            ->with('success', 'Force Delete success');
        }
        $newsevent->delete();
        return redirect()->route('backOffice.news-and-event.index')->with('success', 'Delete success');
    }
    
    /**
        * Restore the specified resource back to storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
    public function restore($id)
    {
        $newsevent = NewsAndEvent::withTrashed()->find($id);
        $this->checkDelete($newsevent);
        $newsevent->restore();
        return redirect()->route('backOffice.news-and-event.index')->with('success', 'Restore success');
    }

    public function uploadFile($file = null)
    {
        if (!isset($file)) {
            return false;
        }

        $destinationPath = storage_path('images/') . $this->path . '/';
        
        $image =  md5(time()) . '.' . $file->getClientOriginalExtension();

        if ($file->move($destinationPath, $image)) {
            return $this->path . '/' . $image;
        } else {
            return '';
        }
    }


    private function checkDeleteWithMsg($data, $msg)
    {
        if (empty($data)) {
             \Session::flash('warning', $msg);
            \App::abort(302, '', ['Location' => route('backOffice.news-and-event.index')]);
        }
    }


    private function checkDelete($model)
    {
       
        if ($model == null) {
            \Session::flash('warning', 'Tag was deleted');
            \App::abort(302, '', ['Location' => route('backOffice.news-and-event.index')]);
        }
    }

    public function checkStatus(Request $request)
    {
        if ($request->has('item')&& is_array($request->input('item'))) {
            $statusList = [];
            $newsevent = NewsAndEvent::withTrashed()
            ->whereIn('id', $request->input('item'))
            ->orderByRaw('FIELD(id, '.sprintf("'%s'", implode("','", $request->input('item'))).')asc')
            ->get();
            if ($newsevent->count() > 0) {
                foreach ($newsevent as $method) {
                    $statusList[] = [
                        'id' => $method->id,
                        'name' => $method->title,
                        'status' => (
                            $method->trashed() == true ?
                            '<span class="delete">Soft delete</span>' :
                            '<span class="active">Active</span>'
                        )
                    ];
                }
            }

            return $statusList;
        } elseif ($request->has('id') && $request->input('id') != null) {
            $newsevent = NewsAndEvent::withTrashed()->find($request->input('id'));
            if ($newsevent == null) {
                $status = 'deleted';
            } elseif ($newsevent->trashed()) {
                $status = 'softDelete';
            } else {
                $status = 'active';
            }
            return $status;
        }
    }

    public function getImage(Request $request)
    {
        $imagePath = $request->image;
        // Check if the visitor/user is allowed to view the image.
        return Image::make(storage_path('images/') . $imagePath)->response('jpg');
    }
}
