<?php

class BuildingProductionTableSeeder extends Seeder
{

	public function run()
	{
		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "fishermansHat")->first()->id,
			"upkeep"                   => 10,
			"product"                  => "fish",
			"productQuantity"          => 5,
			"productCondition"         => null,
			"productConditionQuantity" => 0,
			"productConditionRequired" => false,
		]);
		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "hempPlantation")->first()->id,
			"upkeep"                   => 10,
			"product"                  => "wool",
			"productQuantity"          => 5,
			"productCondition"         => null,
			"productConditionQuantity" => 0,
			"productConditionRequired" => false,
		]);

		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "house")->first()->id,
			"upkeep"                   => 0,
			"product"                  => "money",
			"productQuantity"          => 20,
			"productCondition"         => "fish",
			"productConditionQuantity" => 1,
			"productConditionRequired" => true,
		]);

		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "warehouse")->first()->id,
			"upkeep"                   => 20,
			"product"                  => null,
			"productQuantity"          => 5,
			"productCondition"         => null,
			"productConditionQuantity" => 0,
			"productConditionRequired" => false,
		]);

		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "weaversHat")->first()->id,
			"upkeep"                   => 10,
			"product"                  => "cloth",
			"productQuantity"          => 5,
			"productCondition"         => "wool",
			"productConditionQuantity" => 3,
			"productConditionRequired" => false,
		]);

		BuildingProduction::create([
			"building"                 => Building::where("appClass", "=", "woodcutter")->first()->id,
			"upkeep"                   => 10,
			"product"                  => "wood",
			"productQuantity"          => 2,
			"productCondition"         => null,
			"productConditionQuantity" => 0,
			"productConditionRequired" => false,
		]);

	}

}