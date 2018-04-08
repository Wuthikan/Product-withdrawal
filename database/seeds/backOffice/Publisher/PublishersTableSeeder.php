<?php
namespace Publisher;

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_publishers')->truncate();
        factory(\DurianSoftware\Publisher::class, 10)->create();
    }
}
