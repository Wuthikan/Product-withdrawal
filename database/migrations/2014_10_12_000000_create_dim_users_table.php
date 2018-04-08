<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use DurianSoftware\User;

class CreateDimUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dim_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned()->nullable()->default(1);
            $table->integer('birth_date_id')->unsigned();
            $table->integer('register_date_id')->unsigned();
            $table->text('member_number');
            $table->string('password');

            $table->text('first_name');
            $table->text('last_name');
            $table->text('nick_name');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->text('email');
            $table->text('phone');
            $table->text('image1')->nullable();
            $table->text('image2')->nullable();
            $table->enum('image_show', ['default', 'image1', 'image2'])->default('default');
            $table->text('description_status')->nullable();
            $table->enum('is_block', ['block', 'unblock'])->default('unblock');
            $table->enum('user_right', ['admin', 'staff'])->default('staff');

            $table->timestamps();
            $table->softDeletes();
        });

        User::create([
            'client_id'             => 1,
            'birth_date_id'         => factory(DurianSoftware\Date::class)->create()->id,
            'register_date_id'      => factory(DurianSoftware\Date::class)->create()->id,
            'member_number'         => 'ABC123456',
            'password'              => Hash::make('88888888'),
            'first_name'            => 'first',
            'last_name'             => 'last',
            'nick_name'             => 'ad',
            'gender'                => 'male',
            'email'                 => 'info@adiwit.co.th',
            'phone'                 => '866-812-9897',
            'image1'                => 'https://lorempixel.com/640/480/?53659',
            'image2'                => 'https://lorempixel.com/640/480/?53659',
            'image_show'            => 'image1',
            'description_status'    => 'Eligendi quod fugit et autem praesentium. Temporibus fugiat eos sit iure.',
            'is_block'              => 'unblock',
            'user_right'            => 'admin',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dim_users');
    }
}
