<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingTable extends Migration {

	public function up()
	{
		Schema::create('shipping', function(Blueprint $table) {
			$table->increments('id');
			$table->string('shipping_name', 255);
			$table->text('shipping_address');
			$table->string('shipping_email', 255);
			$table->integer('shipping_phone');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('shipping');
	}
}
