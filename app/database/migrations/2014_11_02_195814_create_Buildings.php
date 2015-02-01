<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buildings', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string("name");
            $table->string("appClass")->unique();
            $table->integer("woodCost");
            $table->integer("toolCost");
            $table->integer("buildingCost");
            $table->string("inhabitants");
            $table->boolean("canBuild");
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('buildings');
	}

}
