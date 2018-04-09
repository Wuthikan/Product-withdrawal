<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimProductWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_product_withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->integer('withdrawal_date')->unsigned()->comment('fk ( บันทึกรหัสของวันที่ถอนสินค้า)');
            $table->integer('refund')->unsigned()->comment('fk ( บันทึกรหัสของลูกค้า branch_id)');
            $table->text('referece_document_no')->comment('รหัสของเอกสาร');
            $table->text('contact_name')->comment('ชื่อของคนติดต่อ');
            $table->text('event')->nullable()->comment('บันทึก event ที่เบิกสินค้าไปใช้');
            $table->text('remark')->nullable()->comment('หมายเหตุ');
            $table->integer('withdrawal_total')->unsigned()->comment('จำนวนสิ้นค้าที่ถอนออกไปทั้งหมด');
            $table->enum('is_approve', ['approve', 'unapprove'])->nullable()->comment('approve,unapprove');
            $table->integer('user_approve_id')->unsigned()->comment('fk (บันทึกรหัสของ user ที่ เปลี่ยนแปลงสถานะการ approve)');
            
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
        Schema::dropIfExists('dim_product_withdrawals');
    }
}
