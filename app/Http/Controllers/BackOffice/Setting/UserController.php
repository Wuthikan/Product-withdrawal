<?php

namespace DurianSoftware\Http\Controllers\BackOffice\Setting;

use DurianSoftware\Http\Controllers\Controller;

use Hash;
use Session;
use Illuminate\Http\Request;
use DurianSoftware\Http\Requests\BackOffice\User\UserRequest;

use DurianSoftware\User;
use DurianSoftware\Date;
use DurianSoftware\Models\Role;
use DurianSoftware\Models\Department;
use DurianSoftware\DepartmentRoleUser;

class UserController extends Controller
{
    public $perPage = 15;

    public function __construct()
    {
        session(['client_id' => 1]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // search จาก field ไหนก็ได้ ทำเป็นแบบ OR ให้มี %search_term% ก็เจอ
        $data_search = '';

        if ($request->has('search')) {
            $data_search = $request->search;

             $query = User::withTrashed()
                 ->where(function ($q) use ($data_search) {
                    $q->where('member_number', 'LIKE', "%{$data_search}%");
                    $q->orWhere('first_name', 'LIKE', "%{$data_search}%");
                    $q->orWhere('last_name', 'LIKE', "%{$data_search}%");
                    $q->orWhere('nick_name', 'LIKE', "%{$data_search}%");
                    $q->orWhere('gender', 'LIKE', "%{$data_search}%");
                    $q->orWhere('email', 'LIKE', "%{$data_search}%");
                    $q->orWhere('phone', 'LIKE', "%{$data_search}%");
                    $q->orWhere('description_status', 'LIKE', "%{$data_search}%");
                 });
        } else {
            $query = User::withTrashed();
        }

        $sort = $request->has('sort') ? $request->sort : 'id';
        $order = $request->has('order') ? $request->order : 'asc';

        $users = $query
            ->whereClientId(Session::get('client_id'))
            ->orderBy($sort, $order)
            // ->toSql();
            ->paginate($this->perPage);

        return view('backOffice.setting.user.index')
            ->with('users', $users)
            ->with('search', $data_search)
            ->with('sort', $sort)
            ->with('order', $order);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['departments'] = Department::whereClientId(Session::get('client_id'))->get();
        $data['roles'] = Role::whereClientId(Session::get('client_id'))->get();

        return view('backOffice.setting.user.create')
            ->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $clientId = Session::get('client_id');

        $image1 = null;
        $image2 = null;

        if ($request->has('image1')) {
            $image1 = $request->file('image1')->store('images/back-office/users');
        }

        if ($request->has('image2')) {
            $image2 = $request->file('image2')->store('images/back-office/users');
        }

        // store
        try {
            $birthDate = Date::InsertStrDate(trim($data['birthdate']));
        } catch (\Exception $e) {
            return back()
                ->with('warning', 'Can\'t Create')
                ->withInput();
        }

        try {
            $registerDate = Date::InsertStrDate(trim($data['register_date']));
        } catch (\Exception $e) {
            return back()
                ->with('warning', 'Can\'t Create')
                ->withInput();
        }

        try {
            $user = User::create([
                'client_id'             => $clientId,
                'birth_date_id'         => $birthDate->id,
                'register_date_id'      => $registerDate->id,
                'member_number'         => trim($data['member_number']),
                'password'              => Hash::make(trim($data['password'])),
                'first_name'            => trim($data['first_name']),
                'last_name'             => trim($data['last_name']),
                'nick_name'             => trim($data['nick_name']),
                'gender'                => trim($data['gender']),
                'email'                 => trim($data['email']),
                'phone'                 => trim($data['phone']),
                'description_status'    => trim($data['description_status']),
                'image_show'            => trim($data['imageShow']),
                'image1'                => $image1,
                'image2'                => $image2,
            ]);
        } catch (\Exception $e) {
            return back()
                ->with('warning', 'Can\'t Create')
                ->withInput();
            // dd($e->getMessage());
        }

        $userRelations = [];

        foreach ($data['userPrivilege'] as $department_id => $role_id) {
            array_push($userRelations, [
                'client_id'     => $clientId,
                'user_id'       => $user->id,
                'role_id'       => intval($role_id),
                'department_id' => intval($department_id),
            ]);
        }

        if (count($userRelations) > 0) {
            try {
                DepartmentRoleUser::insert($userRelations);
            } catch (\Exception $e) {
                // dd($e->getMessage());
                return back()
                    ->with('warning', 'Can\'t Create')
                    ->withInput();
            }
        }

        return redirect('back-office/setting/user/create')
            ->with('success', 'Create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('backOffice.setting.user.show')
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $data['departments'] = Department::whereClientId(Session::get('client_id'))->get();
        $data['roles'] = Role::whereClientId(Session::get('client_id'))->get();

        return view('backOffice.setting.user.create')->with([
            'user' => $user,
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if (!$request->has('image')) {
            User::where('id', $id)->update($request->except(['_token', '_method', '_image']));
            return redirect('back-office/setting/user/' . $id . '/edit')->with('success', 'Update success');
        } else {
            $fileUploaded = $this->uploadFile($request->file('image'));
            if ($fileUploaded === '') {
                return redirect('back-office/setting/user/' . $id . '/edit')->with('error', 'Upload failure');
            } else {
                User::where('id', $id)->update(
                    array_merge($request->except(['_token', '_method', '_image']), ['image' => $fileUploaded])
                );
                return redirect('back-office/setting/user/' . $id . '/edit')->with('success', 'Update success');
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
        $user = User::withTrashed()->find($id);
        if ($user->trashed()) {
            $user->forceDelete();

            return redirect()
                ->route('backOffice.setting.user.index')
                ->with('success', 'Force Delete success');
        }

        $user->delete();

        return redirect()
            ->route('backOffice.setting.user.index')
            ->with('success', 'Delete success');
    }

    /**
        * Restore the specified resource back to storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
    public function restore($id)
    {
        User::withTrashed()
            ->find($id)
            ->restore();

        return redirect()
            ->route('backOffice.setting.user.index')
            ->with('success', 'Restore success');
    }
}
