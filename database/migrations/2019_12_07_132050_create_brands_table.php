<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id')->primary();
			$table->string('name', 255);
			$table->enum('status', array('Active', 'Deleted'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('brands');
	}
}