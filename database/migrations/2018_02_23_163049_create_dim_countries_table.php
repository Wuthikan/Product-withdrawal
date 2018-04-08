<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('dim_countries')) {
            Schema::create('dim_countries', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('client_id')->default(1);
                $table->index('client_id');
                $table->string('name', 100);
                $table->string('code', 100);
                $table->longText('description')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_countries');
    }
}
