<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderProductTable extends Migration {

	public function up()
	{
		Schema::create('order_product', function(Blueprint $table) {
			$table->increments('id')->primary();
			$table->integer('order_id')->unsigned()->index();
			$table->integer('product_id')->unsigned()->index();
			$table->string('product_name', 255);
			$table->string('product_price', 255);
			$table->integer('product_sales_quantity');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('order_product');
	}
}