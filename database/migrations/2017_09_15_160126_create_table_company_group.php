<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCompanyGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_company_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('customer_tier_id')->nullable();
            $table->string('description', 255);
            $table->enum('status', ['on', 'off'])->default('on');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_company_groups');
    }
}
