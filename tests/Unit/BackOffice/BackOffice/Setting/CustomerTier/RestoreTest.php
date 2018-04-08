<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use DurianSoftware\Models\CustomerTier;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestoreTest extends TestCase
{
    public function testRestoreCustomerTierComplete()
    {
        $CustomerTier = CustomerTier::first();
        $CustomerTier->delete();
        $result = $CustomerTier->restore();
        $this->assertTrue($result);
    }
}
