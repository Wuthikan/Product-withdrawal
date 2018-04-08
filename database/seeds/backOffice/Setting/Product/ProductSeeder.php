<?php
namespace Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_products')->truncate();
        factory(\DurianSoftware\Models\Product::class, 20)->create();
    }
}
