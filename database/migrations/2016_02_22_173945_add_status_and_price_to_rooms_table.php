<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusAndPriceToRoomsTable extends Migration {

	public function up()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			$table->string('availability');
			$table->double('price');
		});
	}

	public function down()
	{
		Schema::table('rooms', function(Blueprint $table)
		{
			$table->dropColumn('availability');
			$table->dropColumn('price');
		});
	}

}
