<?php

namespace Tests\Unit\BackOffice\Setting\CustomerTier;

use Tests\TestCase;
use DurianSoftware\Models\CustomerTier;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    public function testSearchByName()
    {
        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'image' => '1231234.jpg'
        ];

        CustomerTier::create($data);

        $CustomerTier = CustomerTier::where('name', 'LIKE', '%diw%')->first();

        $this->assertEquals($data['name'], $CustomerTier->name);
    }

    public function testSearchByDescription()
    {
        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'image' => '1231234.jpg'
        ];
        $CustomerTier = CustomerTier::where('description', 'LIKE', '%Ltd.%')->first();

        $this->assertEquals($data['description'], $CustomerTier->description);
    }
}
