<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use Tests\TestCase;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    public function testUpdateItem()
    {
        $data = factory(CustomerTier::class, 1)->make()->first()->toArray();
        
        $CustomerTier = CustomerTier::first();
        $CustomerTier->update($data);

        $this->assertEquals($data['client_id'], $CustomerTier->client_id);
        $this->assertEquals($data['name'], $CustomerTier->name);
        $this->assertEquals($data['description'], $CustomerTier->description);
    }
}
