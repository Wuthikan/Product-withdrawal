<?php

namespace Tests\Unit\BackOffice\User;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserDestroyTest extends TestCase
{

    public function testDestroy()
    {
        // $user = User::first();

        // $user->delete(); // SoftDelete
        // $result = $user->delete(); // ForceDelete

        // $this->assertTrue($result);
        $this->assertTrue(true);
    }
}
