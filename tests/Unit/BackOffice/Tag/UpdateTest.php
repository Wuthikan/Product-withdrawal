<?php

namespace Tests\Unit\BackOffice\Example;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{

    public function testCaseExample()
    {
        $data = factory(Tag::class, 1)->make()->first()->toArray();
        
        $tag = Tag::first();
        $tag->update($data);

        $this->assertEquals($data['name'], $tag->name);
    }
}
