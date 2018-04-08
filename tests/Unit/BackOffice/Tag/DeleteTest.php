<?php

namespace Tests\Unit\BackOffice\Tag;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteTest extends TestCase
{
    public function testCaseExample()
    {
        $tag = Tag::first();
        $result = $tag->delete();
        $this->assertTrue($result);
    }
}
