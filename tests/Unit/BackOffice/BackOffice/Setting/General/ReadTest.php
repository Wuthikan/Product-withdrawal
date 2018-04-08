<?php

namespace Tests\Unit\BackOffice\Setting\General;

use DurianSoftware\Models\General;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRead()
    {
        $general = general::first();
        $data = general::find($general->id);
        $this->assertEquals($general->company_name, $data->company_name);
        $this->assertEquals($general->logo, $data->logo);
    }
}
