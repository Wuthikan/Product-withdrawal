<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_department', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned()->default(1);
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        $data = [
            0 => ['client_id' => 1, 'name' => 'purchasing',         'description' => ''],
            1 => ['client_id' => 1, 'name' => 'sales',              'description' => ''],
            2 => ['client_id' => 1, 'name' => 'logistic',           'description' => ''],
            3 => ['client_id' => 1, 'name' => 'marketing',          'description' => ''],
            4 => ['client_id' => 1, 'name' => 'accounting',         'description' => ''],
            5 => ['client_id' => 1, 'name' => 'other',              'description' => ''],
            6 => ['client_id' => 1, 'name' => 'news and events',    'description' => ''],
        ];

        DB::table('dim_department')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_department');
    }
}
