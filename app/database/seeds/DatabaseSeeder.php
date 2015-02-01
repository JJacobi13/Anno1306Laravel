<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call("BuildingsTableSeeder");
        $this->call("BuildingProductionTableSeeder");
        $this->call("ResourcesTableSeeder");
	}

}
