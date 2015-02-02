<?php

abstract class BaseModel extends \Eloquent{

	protected static $presenterInstance;

	public function presenter(){
		if( !self::$presenterInstance ){
			$presenter = get_called_class() . "Presenter";
			self::$presenterInstance = new $presenter($this);
		}
		return self::$presenterInstance;
	}
}