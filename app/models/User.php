<?php


use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends \Eloquent implements ConfideUserInterface{
	use ConfideUser;

	protected $fillable = [
		'username',
		'email',
		'password',
		'password_confirmation',
		'confirmation_code',
		'confirmed',
	];

	public static function create( array $attributes ){

		$password = self::generatePassword();

		$defaults = [
			'email'                 => $attributes[ 'username' ] . '@mail.nl',
			'password'              => $password,
			'password_confirmation' => $password,
			'confirmation_code'     => md5( uniqid( mt_rand(), true ) ),
			'confirmed'             => true,
		];

		$user = parent::create( array_merge( $defaults, $attributes ) );

		UserResource::createStartingResources( $user );

		return $user;
	}

	public static function generatePassword(){
		return '12345678';
	}

	public function resources(){
		return $this->hasMany( 'UserResource' );
	}

	public function buildings(){
		return $this->belongsToMany( 'Building', 'user_buildings' );
	}

	public function getResource( $resource ){
		return UserResource::where( 'user_id', '=', $this->id )
			->where( 'resource_id', '=', \Resource::where( 'name', '=', $resource )->first()->id )
			->first();
	}
	public function getBuildResources(){
		return UserResource::join('resources','user_resources.resource_id','=','resources.id')
			->where( 'user_id', '=', $this->id )
			->whereIn('name', ['money','tools','wood'] )->get(['name','quantity']);
	}

	public function restart(){
		UserResource::where( 'user_id', '=', $this->id )->delete();
		DB::table( 'user_buildings' )->where( 'user_id', '=', $this->id )->delete();
		UserResource::createStartingResources( $this );
	}


}