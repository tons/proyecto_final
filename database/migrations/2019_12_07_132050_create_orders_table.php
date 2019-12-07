<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id')->primary();
			$table->integer('user_id')->unsigned()->index();
			$table->integer('shipping_id')->unsigned()->index();
			$table->integer('payment_id')->unsigned()->index();
			$table->integer('total');
			$table->enum('status', array('Pending', 'Completed'));
			$table->string('date', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}