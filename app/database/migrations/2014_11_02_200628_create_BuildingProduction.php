<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingProduction extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('building_productions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer("upkeep");
            $table->string("product")->nullable();
            $table->integer("productQuantity")->nullable();
            $table->string("productCondition")->nullable();
            $table->integer("productConditionQuantity")->nullable();
            $table->boolean("productConditionRequired")->nullable();
			$table->integer("building");
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
		Schema::drop('building_productions');
	}

}
