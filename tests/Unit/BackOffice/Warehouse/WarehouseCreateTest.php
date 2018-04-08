<?php

namespace Tests\Unit\BackOffice\Setting\Warehouse;

use Tests\TestCase;
use DurianSoftware\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseCreateTest extends TestCase
{
    public function testCreateWarehouseform()
    {
        $data = factory(Warehouse::class, 1)->make()->first()->toArray();
        
        $warehouse = Warehouse::create($data);
        $this->assertEquals($data['client_id'], $warehouse->client_id);
        $this->assertEquals($data['warehourse_type'], $warehouse->warehourse_type);
        $this->assertEquals($data['name'], $warehouse->name);
        $this->assertEquals($data['description'], $warehouse->description);
    }
}
