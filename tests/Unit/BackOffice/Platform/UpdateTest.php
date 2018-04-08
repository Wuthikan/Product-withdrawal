<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    public function testUpdateItem()
    {
        $data = factory(Platform::class, 1)->make()->first()->toArray();
        
        $platform = Platform::first();
        $platform->update($data);

        $this->assertEquals($data['name'], $platform->name);
        $this->assertEquals($data['description'], $platform->description);
    }
}
