<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadTest extends TestCase
{

    public function testViewPlatformItem()
    {
        $platform = Platform::first();
        
        $data = Platform::find($platform->id);

        $this->assertEquals($platform->name, $data->name);
        $this->assertEquals($platform->description, $data->description);
    }
}
