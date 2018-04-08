<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use DB;
use DurianSoftware\Http\Controllers\Controller;
use DurianSoftware\Http\Requests\BackOffice\Tag\TagRequest;
use DurianSoftware\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    public $perPage = 15;

    public function __construct()
    {
        $this->client_id = Session::get('client_id') ?: 1;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort = Session::get('sort');
        $order = Session::get('order');

        if ($request->filled('rdoBy')) {
            $sort = $request->input('rdoBy');
        }

        if ($request->filled('rdoOrder')) {
            $order = $request->input('rdoOrder');
        } elseif (empty($order)) {
            $order = 'asc';
        }

        if ($request->filled('search')) {
            $data_search = $request->search;
            $search = $request->input('search');
            $model = Tag::withTrashed()->where('name', 'LIKE', '%'.$search.'%');
        } else {
            $model = Tag::withTrashed();
        }
        $model = $model->where('client_id', $this->client_id);


        if (in_array($sort, array('name', 'created_at'))) {
            Session::put('sort', $sort);
            Session::put('order', $order);
            $model = $model->orderBy($sort, $order);
        } else {
            $model = $model->orderByDesc('created_at');
        }

        if ($request->filled('excel')) {
            $excel = collect([['Tag Name', 'created_at', 'updated_at', 'deleted_at']]);
            $data = $model->select(['name', 'created_at', 'updated_at', 'deleted_at'])->get();
            $excel = $excel->concat($data);
            return $excel->downloadExcel('tag.csv');
        }
        $model = $model->paginate($this->perPage);
        return view('backOffice.setting.tag.index')->with('data', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backOffice.setting.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $created = Tag::create([
            'name' => $request->name,
            'client_id' => $this->client_id
            ]);

        return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.save_success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        $this->checkDelete($tag);
        
        return view('backOffice.setting.tag.show')
            ->with('tag', $tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        $this->checkDelete($tag);
        return view('backOffice.setting.tag.update')
            ->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $tag = Tag::where('id', $id)->where('client_id', $this->client_id);
        $this->checkDelete($tag);
        $tag->update([
                'name' => $request->name
            ]);

        return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.update_success');
    }

    // Duplicate data
    public function duplicate($id)
    {
        $tag = Tag::find($id);
        $this->checkDelete($tag);
        return view('backOffice.setting.tag.duplicate')
            ->with('tag', $tag);
        // $Tag::find($id)->replicate()->save();
        // return \Redirect::route('backOffice.setting.tag.edit', $id)->with('success', 'Duplicate success');
    }

    public function storeDuplicate(TagRequest $request)
    {
        $model = Tag::create([
            'name' => $request->name
            ]);

        return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.duplicate_success');
    }

    // update name
    public function patchName(TagRequest $request, $id)
    {
        try {
            $model = Tag::where('id', $id)->where('client_id', $this->client_id);

            $model->update([
                    'name' => $request->name
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
                $tag = Tag::withTrashed()
                  ->where('client_id', $this->client_id)
                  ->find($id);
                if ($tag==null) {
                    continue;
                }
                if ($tag->trashed()) {
                    $tag->forceDelete();
                    continue;
                }
                $tag->delete();
            }
            DB::commit();
            echo 1;
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            echo 0;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tag = Tag::withTrashed()->where('client_id', $this->client_id)->find($id);
        if ($request->has('_force')) {
            if ($tag == null) {
                return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.force_delete_success');
            } elseif ($tag->trashed()) {
                $tag->forceDelete();
                return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.force_delete_success');
            } else {
                return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.delete_success');
            }
        } else {
            if ($tag == null) {
                return redirect()->route('backOffice.setting.tag.index')
                    ->with('success', 'alert.force_delete_before_edit');
            } elseif (!$tag->trashed()) {
                $tag->delete();
            }
            return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.delete_success');
        }
    }

    /**
     * Restore the specified resource from Soft Deletion.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        $tag = Tag::withTrashed()->where('client_id', $this->client_id)->find($id);
        $this->checkDelete($tag);
        $tag->restore();
        return redirect()->route('backOffice.setting.tag.index')->with('success', 'alert.restore_success');
    }
    
    private function checkDelete($model)
    {
        if ($model == null) {
            Session::flash('warning', 'alert.force_delete_before_edit');
            redirect()->route('backOffice.setting.tag.index');
        }
    }

    public function checkStatus(Request $request, $id)
    {
        $tag = Tag::withTrashed()->where('client_id', $this->client_id)->find($id);
        if ($tag == null) {
            \Session::flash('warning', 'alert.force_delete_before_edit');
            echo 'deleted';
        } elseif ($tag->trashed()) {
            if ($request->has('checkEdit')) {
                \Session::flash('warning', 'alert.delete_before_edit');
            }
            echo 'softDelete';
        } else {
            echo 'active';
        }
    }
}
