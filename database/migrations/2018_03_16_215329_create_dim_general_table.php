<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DurianSoftware\Models\DimGeneral;

class CreateDimGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_general', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->default("1");
            $table->string('company_name', '255')->comment('ชื่อบริษัท');
            $table->string('tax_no', '255')->comment('เลขประจำตัวผู้เสียภาษี');
            $table->longtext('address')->comment('ที่อยู่');
            $table->integer('sub_district_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('postcode_id')->unsigned();

            $table->text('logo')->comment('พาธที่อยู่ของรูป logo')->nullable();
            $table->text('background')->comment('พาธที่อยู่ของรูป background')->nullable();
            $table->string('alias')->comment('ชื่อที่ต้องการแสดงข้าง logo ตรง header (initial)')->nullable();

            $table->integer('alert_days_before_pre_po_end')
                    ->comment('แจ้งเตือนก่อน pre po จะหมดเป็นเวลากี่วัน')->unsigned()->default("7");
            $table->integer('alert_days_before_initial_po_end')
                    ->comment('แจ้งเตือนก่อน initial po จะหมดเป็นเวลากี่วัน')->unsigned()->default("7");
            $table->integer('alert_days_before_post_po_end')
                    ->comment('แจ้งเตือนก่อน post po จะหมดเป็นเวลากี่วัน')->unsigned()->default("7");
            $table->integer('alert_hours_after_no_approval_attempt_1')
                    ->comment('แจ้งเตือน (ชม.) ครั้งที่ 1 มีคำขอ Approve ที่ยังไม่ได้ Approve ')
                    ->unsigned()->default("8");
            $table->integer('alert_hours_after_no_approval_attempt_2')
                    ->comment('แจ้งเตือน (ชม.) ครั้งที่ 2 มีคำขอ Approve ที่ยังไม่ได้ Approve ')
                    ->unsigned()->default("12");
            $table->integer('alert_hours_after_no_approval_attempt_3')
                    ->comment('แจ้งเตือน (ชม.) ครั้งที่ 3 มีคำขอ Approve ที่ยังไม่ได้ Approve ')
                    ->unsigned()->default("18");
            $table->integer('alert_hours_after_no_approval_attempt_4')
                    ->comment('แจ้งเตือน (ชม.) ครั้งที่ 4 มีคำขอ Approve ที่ยังไม่ได้ Approve ')
                    ->unsigned()->default("24");
            $table->integer('alert_days_before_billing_due')
                    ->comment('แจ้งเตือนก่อนถึง billing date เป็นเวลากี่วัน')
                    ->unsigned()->default("48");
            $table->integer('days_to_delete_unpaid_sales_order')
                    ->comment('ลบ unpaid หลังจาก billing due date เป็นเวลากี่วัน')
                    ->unsigned("7");
            
            $table->string('email_username', '255')
                    ->comment('รหัสผู้ใช้งาน')->nullable();
            $table->string('email_password')
                    ->comment('รหัสผ่าน (ให้ Hash ด้วย - ไม่เก็บเป็น plain text)')->nullable();
            $table->string('server_url', '255')
                    ->comment('เลข IP Address ของ Mail Server')->nullable();
            $table->string('server_port', '255')->comment('หมายเลข Port ของ Mail Server ')->nullable();
            $table->enum('server_encryption_type', ['TLS/SSL', 'STARTTLS'])->nullable()->default(null);
            $table->string('facebook_url')->comment('URL Facebook')->nullable();
            $table->string('twitter_url')->comment('URL Twitter')->nullable();
            $table->string('line_url')->comment('ID Line')->nullable();
            $table->string('telephone_number', '255')->comment('เบอร์โทรศัพท์');
            $table->longtext('google_analytic')->comment('URL Goole Analytic สำหรับดูสถิติ')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        DimGeneral::create([
            'client_id' =>'1',
            'company_name' => '',
            'tax_no' => 0,
            'address'=> '',
            'sub_district_id' => 0,
            'district_id' => 0,
            'province_id' => 0,
            'postcode_id' => 0,
            'logo' => '',
            'background' => '',
            'alias' => '',
            'alert_days_before_pre_po_end' => '7',
            'alert_days_before_initial_po_end' => '7',
            'alert_days_before_post_po_end' => '7',
            'alert_hours_after_no_approval_attempt_1' => '8',
            'alert_hours_after_no_approval_attempt_2' => '12',
            'alert_hours_after_no_approval_attempt_3'=> '18',
            'alert_hours_after_no_approval_attempt_4' => '24',
            'alert_days_before_billing_due' => '48',
            'days_to_delete_unpaid_sales_order' => '7',
            'email_username' => null,
            'email_password' => null,
            'server_url' => null,
            'server_port' => 0,
            'server_encryption_type' => null,
            'facebook_url' => null,
            'twitter_url' => null,
            'line_url' => null,
            'telephone_number' => '',
            'google_analytic' => null,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_general');
    }
}
