<?php

class Resource extends BaseModel {
	protected $fillable = ['name'];

	public function userRecources()
	{
		return $this->hasMany('UserResource');
	}
}