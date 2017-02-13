<?php

namespace App\Http\Controllers;

use Socialite;
use Auth;
use App\User;

class AuthController extends Controller
{

  
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
       
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        
    }


    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
     public function findOrCreateUser($user)
     {
        $authUser = User::where('facebook_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,   
            'facebook_id' => $user->id
        ]);
     }
}