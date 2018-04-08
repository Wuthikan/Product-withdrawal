<?php

namespace Tests\Unit\BackOffice\Setting\Warehouse;

use Tests\TestCase;
use DurianSoftware\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseSearchTest extends TestCase
{
    public function testSearchByName()
    {

        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'status' => 'on'
        ];

       
        Warehouse::create($data);
        $warehouse = Warehouse::where('name', 'LIKE', '%diw%')->first();
        $this->assertEquals($data['name'], $warehouse->name);
    }

    public function testSearchByDescription()
    {
        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'status' => 'on'
        ];
        $warehouse = Warehouse::where('description', 'LIKE', '%Ltd.%')->first();

        $this->assertEquals($data['description'], $warehouse->description);
    }
}
