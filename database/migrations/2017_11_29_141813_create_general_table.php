<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name', 200);
            $table->longtext('address');
            $table->string('postcode', 10);
            $table->string('district', 100);
            $table->integer('tax_no', false, true)->length(50);
            $table->text('logo')->nullable();
            $table->text('background')->nullable();
            $table->string('initial', 100)->nullable();
            $table->integer('alert_prepo', false, true)->length(3)->nullable();
            $table->integer('alert_initialpo', false, true)->length(3)->nullable();
            $table->integer('alert_postpo', false, true)->length(3)->nullable();
            $table->integer('first_alert', false, true)->length(3)->nullable();
            $table->integer('second_alert', false, true)->length(3)->nullable();
            $table->integer('third_alert', false, true)->length(3)->nullable();
            $table->integer('forth_alert', false, true)->length(3)->nullable();
            $table->string('username', 50);
            $table->string('password', 20);
            $table->string('server', 20);
            $table->string('port', 10);
            $table->string('type', 10);
            $table->string('facebook', 200);
            $table->string('twitter', 200);
            $table->string('line', 100);
            $table->string('tel', 20);
            $table->longtext('google_analytic')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
