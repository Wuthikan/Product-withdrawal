<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('name');
            $table->unsignedInteger('client_id');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->index('client_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_tags');
    }
}
