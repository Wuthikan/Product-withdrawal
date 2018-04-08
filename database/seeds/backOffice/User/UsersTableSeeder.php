<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data['deptIDs'] = array_pluck(DurianSoftware\Models\Department::get(), 'id');
        $data['roleIDs'] = array_pluck(DurianSoftware\Models\Role::get(), 'id');

        factory(\DurianSoftware\User::class, 10)
            ->create()
            ->each(function ($user) use ($data) {
                foreach ($data['deptIDs'] as $departmentId) {
                    factory(DurianSoftware\DepartmentRoleUser::class, 1)->create([
                        'department_id' => $departmentId,
                        'role_id' => array_random($data['roleIDs']),
                        'user_id' => $user->id,
                    ]);
                }
            });
        //
    }
}
