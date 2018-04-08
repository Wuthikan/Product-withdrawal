<?php

namespace Tests\Unit\BackOffice\Setting\Warehouse;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseDeleteTest extends TestCase
{
    public function testDelateItem()
    {
        $warehouse = Warehouse::first();
        $result = $warehouse->delete();
        $this->assertTrue($result);
    }
}
