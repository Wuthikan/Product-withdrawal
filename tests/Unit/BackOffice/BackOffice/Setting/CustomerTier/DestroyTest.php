<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use Tests\TestCase;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroyTest extends TestCase
{
    
    public function testDelete()
    {
        $CustomerTier = CustomerTier::first();
        $CustomerTier->delete();
        $result = $CustomerTier->delete();
        $this->assertTrue($result);
        
        factory(\DurianSoftware\Models\CustomerTier::class, 1)->create();
    }
}
