<?php



/**
 * UsersController Class
 *
 * Implements actions regarding user management
 */
class UsersController extends Controller
{


    /**
     * Displays the form for account creation
     *
     * @return  Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('users.signup');
    }

    /**
     * Stores new account
     *
     * @return  Illuminate\Http\Response
     */
    public function store()
    {
	    $username = Input::get('username');
	    if(preg_match('/^[a-zA-Z0-9\-_]{3,13}$/',$username)){
			$user = User::create(['username' => $username]);
		    Auth::attempt(['username' => $user->username, 'password'=>User::generatePassword()],true);
		    return Redirect::home();
	    }else{
		    return Redirect::back()->withErrors(['errorMessage'=>'A valid username only contains A-Z, a-z, 0-9, - and _ and between 3 and 13 characters']);
	    }
    }

    /**
     * Displays the login form
     *
     * @return  Illuminate\Http\Response
     */
    public function login()
    {
        if (Confide::user()) {
            return Redirect::to('/');
        } else {
            return View::make(Config::get('confide::login_form'));
        }
    }

    /**
     * Attempt to do login
     *
     * @return  Illuminate\Http\Response
     */
    public function doLogin()
    {
        $user = User::where('username','=', Input::get('username'))->first();
	    if($user){
		    Auth::attempt(['username' => $user->username, 'password'=>User::generatePassword()],true);
		    return Redirect::to('/');
	    }
	    return Redirect::back()->withErrors(['errorMessage'=>'A unkown name entered']);
    }

    /**
     * Log the user out of the application.
     *
     * @return  Illuminate\Http\Response
     */
    public function logout()
    {
	    Auth::logout();
        return Redirect::to('/');
    }

	public function restart(){
		Auth::user()->restart();
		return Redirect::to('/');
	}
}
