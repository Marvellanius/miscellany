<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        // Twitter uses Oauth1 and doesn't support stateless
        if ($provider == 'twitter') {
            $user = Socialite::driver($provider)->user();
        } else {
            $user = Socialite::driver($provider)->stateless()->user();
        }
        try {
            $authUser = $this->findOrCreateUser($user, $provider);
            Auth::login($authUser, true);
            return redirect($this->redirectTo);
        } catch (\Exception $ex) {
            if ($ex->getCode() == '1') {
                return redirect()->route('register')->withErrors(trans('auth.register.errors.email_already_taken'));
            } else {
                return redirect()->route('register')->withErrors(trans('auth.register.errors.general_error'));
            }
        }
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }

        // Make sure the email doesn't already exist
        $emailExists = User::where('email', $user->email)->first();
        if ($emailExists) {
            throw new \Exception(null, 1);
        }

        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'password' => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }

    public function logout()
    {
        auth()->logout();

        // We also need to flush the session (campaign_id and other things) since this could cause
        // weird behaviour if the user registers a new account.
        session()->flush();

        return redirect()->route('home');
    }
}
