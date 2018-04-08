<?php

namespace tests\Unit\BackOffice\NewsAndEvent;

use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function testCreateNewsEvemtform()
    {
        $data = factory(NewsAndEvent::class, 1)->make()->first()->toArray();
        
        $news_event = NewsAndEvent::create($data);

        $this->assertEquals($data['title'], $news_event->title);
        $this->assertEquals($data['description'], $news_event->description);
        $this->assertEquals($data['image'], $news_event->image);
        $this->assertEquals($data['news_events_date'], $news_event->news_events_date);
        $this->assertEquals($data['start_date'], $news_event->start_date);
        $this->assertEquals($data['end_date'], $news_event->end_date);
        $this->assertEquals($data['status'], $news_event->status);
    }
}
