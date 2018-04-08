<?php

namespace tests\Unit\BackOffice\NewsAndEvent;

use Tests\TestCase;
use DurianSoftware\Models\NewsAndEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroyTest extends TestCase
{
    
    public function testDelete()
    {
        $news_event = NewsAndEvent::first();
        
        $news_event->delete(); // SoftDelete
        $result = $news_event->delete(); // ForceDelete

        $this->assertTrue($result);
    }
}
