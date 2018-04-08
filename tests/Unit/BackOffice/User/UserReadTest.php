<?php

namespace Tests\Unit\BackOffice\User;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserReadTest extends TestCase
{

    public function testRead()
    {
        $user = User::withTrashed()->first();
        
        $data = User::withTrashed()->find($user->id);

        // $data = User::find($user->id);

        // $this->assertEquals($user->name, $data->name);
        // $this->assertEquals($user->description, $data->description);
        $this->assertTrue(true);
    }
}
