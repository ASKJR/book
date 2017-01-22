<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserAddColumnRememberToken extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query = "ALTER TABLE user ADD COLUMN remember_token VARCHAR(100) DEFAULT NULL";
		DB::statement($query);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$quey = "ALTER TABLE user DROP COLUMN remember_token";
		DB::statement($query);
	}

}
