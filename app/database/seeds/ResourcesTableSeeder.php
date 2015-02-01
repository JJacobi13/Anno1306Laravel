<?php

class ResourcesTableSeeder extends Seeder {

	public function run()
	{

		$elements = ["money","wood","tools","fish", "wool", "cloth"];
		foreach($elements as $element)
		{
			Resource::create(["name" => $element]);
		}
	}

}