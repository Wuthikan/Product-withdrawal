<?php
namespace DurianSoftware\Seeder\BackOffice\Category;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_categories')->truncate();
        factory(\DurianSoftware\Category::class, 10)->create();
    }
}
