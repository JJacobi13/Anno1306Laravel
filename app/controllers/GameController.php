<?php

use Anno\Exceptions\LostException;

class GameController extends BaseController{

	/**
	 * @TODO: improve speed by first calculating resources to pay so only a few sql queries have to be executed
	 * @return array
	 */
	public function nextTurn(){
		try{
			$user = Auth::user();
			foreach( $user->buildings as $building ){
				$building->production->produce( Auth::user(), $building );
			}
			return [ 'status'       => 'success',
			         'message'      => 'Next turn!',
			         'newResources' => Auth::user()->getAllResources(),
			         'buildingsDiv' => View::make( 'game.builtBuildings' )->render()
			];
		}catch( LostException $e ){
			return [ 'status'       => 'lost'];
		}

	}
}