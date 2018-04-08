<?php

namespace General;

use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('generals')->truncate();
        factory(\DurianSoftware\Models\General::class, 1)->create();
    }
}
