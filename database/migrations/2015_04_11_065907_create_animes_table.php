<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('animes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();	// Owning User
			$table->string('libId')->nullable();  	// Item Internal ID
			$table->string('title');				// Full Title of Movie
			$table->string('edition')->nullable;	// Edition Name (Optional)
			$table->integer('releaseYear');			// Year the movie was released
			$table->string('motionPictureRating');	// MPAA Rating
			$table->integer('runtime');				// Length of Movie in Minutes
			$table->string('imdbId')->nullable();	// IMDB Item Number for URL
			$table->string('wikiUrl')->nullable();	// link to Wikipedia for item
			$table->string('format');				// DVD, Digital Copy, Blu-ray, VHS, etc
			$table->string('posterUrl')->nullable();// URL to image for item, e.g. Movie Poster
			$table->timestamps();

			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('animes');
	}

}
