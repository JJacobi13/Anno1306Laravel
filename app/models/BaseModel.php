<?php

abstract class BaseModel extends \Eloquent{

	protected static $presenterInstance;

	public function presenter(){
		$presenter = get_called_class() . "Presenter";
		return new $presenter($this);
	}
}