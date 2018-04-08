<?php

namespace Tests\Unit\BackOffice\Example;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    public function testSearchByName()
    {
        $data = [
            'name' => 'AdiwIT Co., Ltd.',
            'client_id' => 1,
        ];

        Tag::create($data);

        $tags = Tag::where('name', 'LIKE', '%diw%')->first();

        $this->assertEquals($data['name'], $tags->name);
    }
}
