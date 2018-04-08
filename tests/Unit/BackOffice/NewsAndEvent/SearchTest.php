<?php

namespace tests\Unit\BackOffice\NewsAndEvent;

use Tests\TestCase;
use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    public $mockData = [
        'user_id' => 5,
        'title' => 'AdiwIT',
        'description' => 'Adiwit Co., Ltd.',
        'image' => '',
        'news_events_date' => '2011-11-11',
        'start_date' => '2011-11-11',
        'end_date' => '2011-11-12',
        'status' => 'on'
    ];
    public function testSearchByName()
    {
        NewsAndEvent::create($this->mockData);

        $news_event = NewsAndEvent::where('title', 'LIKE', '%diw%')->first();

        $this->assertEquals($this->mockData['title'], $news_event->title);
    }

    public function testSearchByDescription()
    {
        $news_event = NewsAndEvent::where('description', 'LIKE', '%diwit%')->first();

        $this->assertEquals($this->mockData['description'], $news_event->description);
    }
}
