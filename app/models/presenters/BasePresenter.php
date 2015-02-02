<?php
class BasePresenter{
	public function __construct($caller){
		$this->caller = $caller;
	}

	public function __get($property){
		return $this->caller->$property;
	}
}