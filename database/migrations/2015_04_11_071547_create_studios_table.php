<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		Schema::create('movie_studio', function(Blueprint $table)
		{
			$table->integer('movie_id')->unsigned()->index();
			$table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');

			$table->integer('studio_id')->unsigned()->index();
			$table->foreign('studio_id')->references('id')->on('studios')->onDelete('cascade');

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
		Schema::drop('studios');
		Schema::drop('movie_studio');
	}

}
