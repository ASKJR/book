<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserModel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$query ="CREATE TABLE user_book (
  			id INT NOT NULL AUTO_INCREMENT,
  			user_id INT NULL,
  			book_id INT NULL,
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
		$query = "DROP TABLE user_book";
		
		DB::statement($query);
	}

}
