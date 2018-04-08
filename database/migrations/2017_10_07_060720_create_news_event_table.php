<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_news_events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->longText('title');
            $table->longText('description')->nullable();
            $table->text('image');
            $table->date('news_events_date');
            $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['on', 'off'])->default('off');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_news_events');
    }
}
