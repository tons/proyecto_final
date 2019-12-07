<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id')->primary();
			$table->string('method', 255);
			$table->enum('status', array('Pending', 'Completed'));
			$table->string('date', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}