<?php

class Resource extends \Eloquent {
	protected $fillable = ['name'];

	public function userRecources()
	{
		return $this->hasMany('UserResource');
	}
}