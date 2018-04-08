<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTest extends TestCase
{
    public function testSearchByName()
    {
        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'status' => '1'
        ];

        Platform::create($data);

        $platform = Platform::where('name', 'LIKE', '%iwI%')->first();

        $this->assertEquals($data['name'], $platform->name);
    }

    public function testSearchByDescription()
    {
        $data = [
            'name' => 'AdiwIT',
            'description' => 'Adiwit Co., Ltd.',
            'status' => '1'
        ];
        $platform = Platform::where('description', 'LIKE', '%Co.%')->first();

        $this->assertEquals($data['description'], $platform->description);
    }
}
