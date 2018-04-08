<?php
namespace CompanyGroup;

use Illuminate\Database\Seeder;
use \DurianSoftware\Models\CustomerTier;

class CustomerTierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerTier::truncate();
        factory(CustomerTier::class, 20)->create();
    }
}
