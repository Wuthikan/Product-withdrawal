<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestoreTest extends TestCase
{

    public function testRestoreItem()
    {
        $platform = Platform::first();
        
        $platform->delete();
        $result = $platform->restore();
        
        $this->assertTrue($result);
    }
}
