<?php

use Anno\Exceptions\LostException;

class BuildingProduction extends BaseModel{
	protected $fillable = [ ];

	public function produce( $user, $building ){
		if( !$user->getResource( 'money' )->pay( $this->upkeep ) ){
			throw new LostException();
		}

		$payed = true;
		if( $this->productCondition != null ){
			$payed = $user->getResource( $this->productCondition )->pay( $this->productConditionQuantity );
		}
		if( $this->product != null && $payed ){
			$user->getResource( $this->product )->receive( $this->productQuantity );
		}
		if( !$payed && $this->productConditionRequired ){
			$building->delete();
		}
	}
}