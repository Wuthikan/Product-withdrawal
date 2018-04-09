<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogProductWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_product_withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->integer('product_withdrawal_id')->unsigned()->comment('fk (บันทึกรหัส product transfer)');
            $table->integer('date_id')->unsigned()->comment('fk (บันทึกรหัสวันที่)');
            $table->integer('user_id')->unsigned()->comment('fk (บันทึกรหัสพนักงาน)');
            $table->enum('action', ['create', 'edit', 'soft delete', 'force delete', 'export excel', 'view',' search', 'print', 'sent email',' undo', 'restore'])->nullable()->comment('กิจกรรมที่ทำ');
            $table->text('field_name')->nullable()->comment('ชื่อ filed');
            $table->text('value_before')->nullable()->comment('ค่าก่อนหน้า');
            $table->text('value_after')->comment('ค่าปัจจุบัน');

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
        Schema::dropIfExists('log_product_withdrawals');
    }
}
