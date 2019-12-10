<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('image', 255);
			$table->integer('category_id')->unsigned()->index();
			$table->integer('brand_id')->unsigned()->index();
			$table->text('description');
			$table->string('price', 255);
			$table->integer('stock');
			$table->enum('status', array('Active', 'Deleted'));
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}
