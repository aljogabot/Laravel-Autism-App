<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request as Request;
use \Bogart\Json;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

    protected $redirectPath = '/';

	//use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar, \Bogart\Json $json)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
        $this->json = $json;

		$this->middleware( 'guest', [ 'except' => 'logout' ] );
	}

    public function process_login( LoginRequest $request ) {

        $credentials = $request->only( 'email', 'password' );

        if ( $this->auth->attempt( $credentials, $request->has( 'remember' ) ) ) {

            $this->json->success( 'Logged In' )
                        ->redirect( url( $this->redirectPath() ) );

        } else {

            $this->json->error(
                $this->getFailedLoginMessage()
            );

        }

        return $this->json->render();

    }

    public function process_register( Request $request ) {

        $validator = $this->registrar->validator($request->all());

        if ($validator->fails())
        {

            $errors = $validator->errors()->getMessages();
            $errors[ 'ajax_error_message' ] = "Oops ... Try to complete the registration!";

            if ($request->ajax())
            {
                return new JsonResponse($errors, 422);
            }

            $this->throwValidationException(
                $request, $validator
            );

            return;

        }

        $this->auth->login($this->registrar->create($request->all()));

        if( $request->ajax() ) {
            return $this->json->success( 'Logged In' )
                        ->redirect( url( $this->redirectPath() ) )
                        ->render();
        }

        return redirect($this->redirectPath());

    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        $this->auth->logout();
        return redirect( $this->redirectPath() );
    }

    public function register() {

        return view( 'public.auth.register' );

    }

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
        {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }

}
