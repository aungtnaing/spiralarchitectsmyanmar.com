<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainslideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mainslide', function(Blueprint $table)
		{
			$table->increments('id');
		
			$table->string('photourl1');
		
			$table->boolean('active');
			$table->integer('slideno');

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
		Schema::drop('mainslide');
	}

}
