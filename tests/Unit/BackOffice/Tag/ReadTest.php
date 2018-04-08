<?php

namespace Tests\Unit\BackOffice\Tag;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadTest extends TestCase
{

    public function testCaseExample()
    {
        $tag = Tag::first();
        
        $data = Tag::find($tag->id);

        $this->assertEquals($tag->name, $data->name);
    }
}
