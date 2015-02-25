<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->integer('charter')->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->string('name');
			$table->string('last_name');
			$table->text('direction');
			$table->integer('phone');
			$table->integer('cellphone')->nullable();
			$table->date('birth');
			$table->integer('active')->default(0);
			$table->integer('role_id')->default(1);
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
		Schema::drop('users');
	}

}
