<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use Tests\TestCase;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadTest extends TestCase
{

    public function testViewCustomerTier()
    {
        $CustomerTier = CustomerTier::first();
        $data = CustomerTier::find($CustomerTier->id);

        $this->assertEquals($CustomerTier->name, $data->name);
        $this->assertEquals($CustomerTier->description, $data->description);
    }
}
