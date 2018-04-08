<?php
namespace CustomerTier;

use Illuminate\Database\Seeder;

class CustomerTierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\DurianSoftware\Models\CustomerTier::class, 20)->create();
    }
}
