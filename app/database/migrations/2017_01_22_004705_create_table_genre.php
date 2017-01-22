<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGenre extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query ="CREATE TABLE genre (
  			id INT NOT NULL AUTO_INCREMENT,
  			name VARCHAR(255) NULL,
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
		$query = "DROP TABLE genre";
		DB::statement($query);
	}

}
