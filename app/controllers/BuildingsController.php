<?php

class BuildingsController extends \BaseController{

	/**
	 * Display a listing of the resource.
	 * GET /buildings
	 *
	 * @return Response
	 */
	public function index(){
		return View::make( 'navigation._menu', [ 'buildings' => Building::where( 'canBuild', '=', true ) ] );
	}

	/**
	 * Display the specified resource.
	 * GET /buildings/{id}
	 *
	 * @param  int $id
	 * @return Response
	 */
	public function show( $id ){
		return View::make( 'game.buildings.warehouse', [ 'buildings' => Building::where( 'canBuild', '=', true )->get() ] );
	}

	public function build(){
		$building = Building::find( Input::get( 'instanceId' ) );
		if( $building->build() ){
			return [ 'status'       => 'success',
			         'buildingName' => $building->name,
			         'message'      => 'Building a ' . $building->name . ' was successful.',
			         'newResources' => Auth::user()->getBuildResources()
			];
		}

		return [ 'status'  => 'failed',
		         'message' => 'Not enough resources'
		];
	}
}