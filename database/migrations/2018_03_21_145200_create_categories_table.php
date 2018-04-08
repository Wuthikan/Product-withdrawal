<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->string('name')->comment('ชื่อประเภทสินค้า');
            $table->longtext('description')->nullable()->comment('รายละเอียด category');
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
        Schema::dropIfExists('dim_categories');
    }
}
