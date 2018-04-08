<?php

namespace Tests\Unit\BackOffice\Tag;

use Tests\TestCase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    
    public function testCaseExample()
    {
        $response = $this->call('GET', '/back-office/setting/tag');
        $this->assertEquals(200, $response->status());
    }
}
