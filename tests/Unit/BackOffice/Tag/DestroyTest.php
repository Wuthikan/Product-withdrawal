<?php

namespace Tests\Unit\BackOffice\Example;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroyTest extends TestCase
{
    
    public function testCaseExample()
    {
        $tag = Tag::first();
        
        $tag->delete(); // SoftDelete
        $result = $tag->delete(); // ForceDelete

        $this->assertTrue($result);
    }
}
