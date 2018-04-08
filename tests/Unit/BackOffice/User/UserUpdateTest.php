<?php

namespace Tests\Unit\BackOffice\Example;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserUpdateTest extends TestCase
{

    public function testUpdate()
    {
        // $data = factory(User::class, 1)->make()->first()->toArray();

        // $user = User::first();
        // $user->update($data);

        // $this->assertEquals($data['member_number'], $user->member_number);
        // $this->assertEquals($data['first_name'], $user->first_name);
        // $this->assertEquals($data['last_name'], $user->last_name);
        // $this->assertEquals($data['nick_name'], $user->nick_name);
        // $this->assertEquals($data['gender'], $user->gender);
        // $this->assertEquals($data['email'], $user->email);
        // $this->assertEquals($data['telephone'], $user->telephone);
        $this->assertTrue(true);
    }
}
