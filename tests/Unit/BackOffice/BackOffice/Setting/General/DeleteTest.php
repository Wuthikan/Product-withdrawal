<?php

namespace Tests\Unit\BackOffice\Setting\General;

use DurianSoftware\Models\General;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testdelete()
    {
        $general = general::first();
        $result = $general->delete();
        $this->assertTrue($result);
        \DB::table('generals')->truncate();
        factory(\DurianSoftware\Models\General::class, 1)->create();
    }
}
