<?php

class BuildingsTableSeeder extends Seeder {

	public function run()
	{
		Building::create([
            "name" => "Fisherman's hat",
            "appClass" => "fishermansHat",
            "woodCost" => 2,
            "toolCost" => 2,
            "buildingCost" => 100,
            "inhabitants" => 0,
            "canBuild" => true,
        ]);

        Building::create([
            "name" => "Hemp plantation",
            "appClass" => "hempPlantation",
            "woodCost" => 2,
            "toolCost" => 2,
            "buildingCost" => 100,
            "inhabitants" => 0,
            "canBuild" => true,
        ]);

        Building::create([
            "name" => "House",
            "appClass" => "house",
            "woodCost" => 2,
            "toolCost" => 0,
            "buildingCost" => 0,
            "inhabitants" => 5,
            "canBuild" => true,
        ]);

        Building::create([
            "name" => "Warehouse",
            "appClass" => "warehouse",
            "woodCost" => 5,
            "toolCost" => 5,
            "buildingCost" => 500,
            "inhabitants" => 0,
            "canBuild" => false,
        ]);

        Building::create([
            "name" => "Weaver's hat",
            "appClass" => "weaversHat",
            "woodCost" => 2,
            "toolCost" => 2,
            "buildingCost" => 100,
            "inhabitants" => 0,
            "canBuild" => true,
        ]);

        Building::create([
            "name" => "Woodcutter",
            "appClass" => "woodcutter",
            "woodCost" => 0,
            "toolCost" => 2,
            "buildingCost" => 100,
            "inhabitants" => 0,
            "canBuild" => true,
        ]);
	}

}