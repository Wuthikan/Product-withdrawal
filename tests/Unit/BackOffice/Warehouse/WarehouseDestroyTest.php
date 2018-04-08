<?php

namespace Tests\Unit\BackOffice\Setting\Warehouse;

use Tests\TestCase;
use DurianSoftware\Models\Warehouse;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WarehouseDestroyTest extends TestCase
{
    
    public function testDelete()
    {
        $warehouse = Warehouse::first();
        
        $warehouse->delete(); // SoftDelete
        $result = $warehouse->delete(); // ForceDelete

        $this->assertTrue($result);
    }
}
