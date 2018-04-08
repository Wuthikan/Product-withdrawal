<?php
namespace Warehouse;

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\DB::table('dim_warehouses')->truncate();
        factory(\DurianSoftware\Models\Warehouse::class, 20)->create();
    }
}
