<?php

namespace Tests\Unit\BackOffice\Example;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteTest extends TestCase
{
    public function testDelateItem()
    {
        $news_event = NewsAndEvent::first();
        $result = $news_event->delete();
        $this->assertTrue($result);
    }
}
