<?php

class Building extends \Eloquent{
	protected $fillable = [ ];

	public function users(){
		return $this->belongsToMany( 'User', 'user_buildings' );
	}

	public function build(){
		$wood = Auth::user()->getResource('wood');
		$tools = Auth::user()->getResource('tools');
		$money = Auth::user()->getResource('money');
		if($wood->quantity > $this->woodCost && $tools->quantity > $this->toolCost && $money->quantity > $this->buildingCost){
			$wood->pay($this->woodCost);
			$tools->pay($this->toolCost);
			$money->pay($this->buildingCost);
			Auth::user()->buildings()->saveMany([$this]);
			return true;
		}
		return false;
	}
}