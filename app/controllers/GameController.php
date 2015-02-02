<?php

class GameController extends BaseController{

	/**
	 * @TODO: improve speed by first calculating resources to pay so only a few sql queries have to be executed
	 * @return array
	 */
	public function nextTurn(){
		$user = Auth::user();
		foreach( $user->buildings as $building ){
			$user->getResource( 'money' )->pay( $building->production->upkeep );
			if($building->production->product  != null){
				$user->getResource( $building->production->product)->receive( $building->production->productQuantity );
			}
			if($building->production->productCondition != null){
				$user->getResource( $building->production->productCondition)->pay( $building->production->productConditionQuantity );
			}
		}

		return [ 'status'       => 'success',
		         'message'      => 'Next turn!',
		         'newResources' => Auth::user()->getAllResources()
		];
	}
}