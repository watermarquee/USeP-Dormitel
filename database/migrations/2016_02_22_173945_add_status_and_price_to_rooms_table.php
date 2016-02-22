<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndPriceToRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			//
			$table->string('availability');
			$table->integer('price');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			//
			$table->dropColumn('availability');
			$table->dropColumn('price');
		});
	}

}
