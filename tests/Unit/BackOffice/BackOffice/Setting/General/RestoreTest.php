<?php

namespace Tests\Unit\BackOffice\Setting\General;

use DurianSoftware\Models\General;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestoreTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRestore()
    {
        $general = general::first();
        $general->delete();
        $result = $general->restore();
        $this->assertTrue($result);
    }
}
