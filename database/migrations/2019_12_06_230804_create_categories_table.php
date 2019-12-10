<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->text('description');
			$table->enum('status', array('Active', 'Deleted'));
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}
