<?php
namespace NewsEvent;

use Illuminate\Database\Seeder;

class NewsEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dim_news_events')->truncate();
        factory(\DurianSoftware\Models\NewsAndEvent::class, 100)->create();
    }
}
