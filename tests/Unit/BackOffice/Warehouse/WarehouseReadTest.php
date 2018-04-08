<?php

namespace Tests\Unit\BackOffice\Setting\Warehouse;

use Tests\TestCase;
use DurianSoftware\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseReadTest extends TestCase
{

    public function testViewWarehouse()
    {
        $warehouse = Warehouse::first();
        
        $data = Warehouse::find($warehouse->id);

        $this->assertEquals($warehouse->name, $data->name);
        $this->assertEquals($warehouse->description, $data->description);
        $this->assertEquals($warehouse->status, $data->status);
    }
}
