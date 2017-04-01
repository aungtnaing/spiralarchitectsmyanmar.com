<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('mname');
			$table->string('description',2000);
			$table->string('mdescription',2000);
			$table->string('location');
			$table->string('mlocation');
			$table->string('projectgoals',2000);
			$table->string('mprojectgoals',2000);
			$table->string('idea');
			$table->string('scatch');
			$table->string('realization');
			$table->date('sdate');
			$table->integer('categoryid')->unsigned();
			$table->string('status');
			$table->string('photourl1');
			$table->string('photourl2');
			$table->string('photourl3');
			$table->string('photourl4');
			$table->string('photourl5');
			$table->string('photourlsmall1');
			$table->string('photourlsmall2');
			$table->string('photourlsmall3');
			$table->string('photourlsmall4');
			$table->string('photourlsmall5');
			$table->timestamps();


			$table->foreign('categoryid')->references('id')->on('category')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
