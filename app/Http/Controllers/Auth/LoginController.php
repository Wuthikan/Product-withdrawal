<?php

namespace DurianSoftware\Http\Controllers\Auth;

use Socialite;
use DurianSoftware\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return view('auth.login');
    }
 
     /**
      * Obtain the user information from Google.
      *
      * @return Response
      */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $domain = str_after($user->email, '@');
        
        if (str_is('durian.software', $domain) || str_is('ngin.co.th', $domain)) {
            return redirect()->action('BackOffice\HomeController@index');//->intended();
        } else {
            return redirect('https://www.ngin.co.th');
        }
    }
}
