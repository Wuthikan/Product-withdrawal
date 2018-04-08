<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use DurianSoftware\Models\CustomerTier;
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
        $customerTier = CustomerTier::first();
        $result = $customerTier->delete();
        $this->assertTrue($result);
        factory(\DurianSoftware\Models\CustomerTier::class, 1)->create();
    }
}
