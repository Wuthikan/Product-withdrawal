<?php
namespace Tests\Unit\BackOffice\Platform;

use Tests\TestCase;
use Faker\Generator as Faker;
use DurianSoftware\Models\Platform;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestroyTest extends TestCase
{
    
    public function testDelete()
    {
        $platform = Platform::first();
        
        $platform->delete(); // SoftDelete
        $result = $platform->delete(); // ForceDelete

        $this->assertTrue($result);
    }
}
