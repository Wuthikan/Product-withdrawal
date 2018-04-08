<?php

namespace tests\Unit\BackOffice\NewsAndEvent;

use Tests\TestCase;
use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadTest extends TestCase
{

    public function testViewWarehouse()
    {
        $news_event = NewsAndEvent::first();
        
        $data = NewsAndEvent::find($news_event->id);

        $this->assertEquals($news_event->user_id, $data->user_id);
        $this->assertEquals($news_event->title, $data->title);
        $this->assertEquals($news_event->description, $data->description);
        $this->assertEquals($news_event->image, $data->image);
        $this->assertEquals($news_event->news_events_date, $data->news_events_date);
        $this->assertEquals($news_event->start_date, $data->start_date);
        $this->assertEquals($news_event->end_date, $data->end_date);
        $this->assertEquals($news_event->status, $data->status);
    }
}
