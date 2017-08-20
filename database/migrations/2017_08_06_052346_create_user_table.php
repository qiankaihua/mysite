<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('realname')->unique();
            $table->boolean('gender')->default(0)->comment('0男1女');
            $table->string('password');
            $table->string('nickname')->nullable();
            $table->boolean('admin')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
        DB::table('user')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'admin' => true,
            'email' => 'admin@qiankaihua.top',
            'realname' => 'admin',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
