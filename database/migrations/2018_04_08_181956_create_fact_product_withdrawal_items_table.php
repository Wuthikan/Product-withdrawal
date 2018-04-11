<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactProductWithdrawalItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_product_withdrawal_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->integer('product_withdrawal_id')->unsigned()->comment('fk (บันทึกรหัสของ product withdrawal)');
            $table->integer('product_item_id')->unsigned()->comment('fk (บันทึกรหัสของ Product item)');
            // polymophic
            $table->string('withdrawal_from_type')->comment('polymophic (warehouse,branch)');
            $table->integer('withdrawal_from_id')->unsigned()->comment('fk (บันทึกรหัสของคลังสินค้าต้นทาง)');
            $table->integer('withdrawal_quantity')->unsigned()->comment('บันทึกจำนวนสินค้า');
            $table->text('remark')->nullable()->comment('บันทึก event ที่เบิกสินค้าไปใช้');
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
        Schema::dropIfExists('fact_product_withdrawal_items');
    }
}
