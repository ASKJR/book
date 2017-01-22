<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBook extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query ="CREATE TABLE book (
  			id INT NOT NULL AUTO_INCREMENT,
  			title VARCHAR(255) NULL,
  			author VARCHAR(255) NULL,
  			year VARCHAR(4) NULL,
  			page VARCHAR(4) NULL,
  			genre_id INT NULL,
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
		$query = "DROP TABLE book";
		DB::statement($query);
	}

}
