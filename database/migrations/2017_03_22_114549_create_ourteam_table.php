<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurteamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ourteam', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('position');
			$table->string('fburl');	
			$table->string('email')->unique();
			$table->string('linkin');	
			$table->string('photourl');
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
		Schema::drop('ourteam');
	}

}
