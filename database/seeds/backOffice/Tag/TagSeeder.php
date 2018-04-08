<?php
namespace Tag;

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_tags')->truncate();
        factory(\DurianSoftware\Models\Tag::class, 50)->create();
    }
}
