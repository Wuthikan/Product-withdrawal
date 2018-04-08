<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDimRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_role', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('client_id')->unsigned()->default(1);
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        $data = [
            0 => ['client_id' => 1, 'name' => 'MANAGER',       'description' => ''],
            1 => ['client_id' => 1, 'name' => 'SUPERVISOR',    'description' => ''],
            2 => ['client_id' => 1, 'name' => 'USER',          'description' => ''],
            3 => ['client_id' => 1, 'name' => 'DON\'T USE',    'description' => ''],
        ];

        DB::table('dim_role')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_role');
    }
}
