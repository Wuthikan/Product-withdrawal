<?php
namespace Platform;

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_platforms')->truncate();
        factory(\DurianSoftware\Models\Platform::class, 200)->create();
    }
}
