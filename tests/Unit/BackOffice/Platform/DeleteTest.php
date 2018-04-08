<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteTest extends TestCase
{
    public function testDeleteItemPlatform()
    {
        $platform = Platform::first();
        $result = $platform->delete();
        $this->assertTrue($result);
    }
}
