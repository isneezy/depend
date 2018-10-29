<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
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
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('access_level', ['regular', 'admin']);
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('users')->insert([
        	'username' => 'root',
	        'email' => 'admin@example.com',
	        'password' => Hash::make('root'),
	        'access_level' => 'admin',
	        'created_at' => Carbon::now(),
	        'updated_at' => Carbon::now()
        ]);
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
