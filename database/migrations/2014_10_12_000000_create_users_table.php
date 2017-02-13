<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('last_name',100)->nullable();
            $table->string('email',150)->nullable();
            $table->string('password',50)->nullable();
            $table->string('facebook_id',50);
            $table->string('team',5)->nullable();
            $table->string('group',5)->nullable();
            $table->string('generation',5)->nullable();
            $table->enum('join_event',['going', 'not_go'])->nullable();
            $table->enum('user_status',['active', 'inactive'])->nullable();
            $table->unique('facebook_id');
            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
