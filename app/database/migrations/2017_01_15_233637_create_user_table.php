<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query ="CREATE TABLE user (
  			id INT NOT NULL AUTO_INCREMENT,
  			name VARCHAR(255) NULL,
  			email VARCHAR(120) NULL,
  			password VARCHAR(255) NULL,
  			PRIMARY KEY (`id`))
			ENGINE = MyISAM ;";

		DB::statement($query);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		$query = "DROP TABLE user";
		DB::statement($query);
	}

}
