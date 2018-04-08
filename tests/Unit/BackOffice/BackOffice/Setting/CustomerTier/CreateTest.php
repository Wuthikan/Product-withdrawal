<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use Tests\TestCase;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateCustomerTierform()
    {
        $data = factory(CustomerTier::class, 1)->make()->first()->toArray();

        $customerTier = CustomerTier::create($data);
        $this->assertEquals($data['name'], $customerTier->name);
        $this->assertEquals($data['image'], $customerTier->image);
        $this->assertEquals($data['description'], $customerTier->description);
    }
}
