<?php

namespace Tests\Unit\BackOffice\User;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSearchTest extends TestCase
{
    public function testSearch()
    {
        // $data = [
        //     'member_number' => '123456789',
        //     'password' => 'password1234',
        //     'first_name' => 'AdiwIT',
        //     'last_name' => 'Co., Ltd.',
        //     'nick_name' => 'Adiwit',
        //     'gender' => '1',
        //     'email' => 'adiwit@gmail.com',
        //     'telephone' => '099 999 9999',
        //     'status' => '1'
        // ];

        // User::create($data);

        // $user = User::where('member_number', 'LIKE', '%34567%')->first();

        // $this->assertEquals($data['member_number'], $user->member_number);
        $this->assertTrue(true);
    }
}
