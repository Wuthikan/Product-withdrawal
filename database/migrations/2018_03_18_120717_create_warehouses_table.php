<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->string('name', '255')->comment('ชื่อ warehouse');
            $table->longtext('description')->nullable()->comment('รายละเอียด');
            $table->string('image')->nullable()->comment('path ที่ใช้เก็บรูปภาพ');
            $table->enum('warehourse_type', ['Public', 'Private'])->default('Public')->comment('path ที่ใช้เก็บรูปภาพ');
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
        Schema::dropIfExists('dim_warehouses');
    }
}
