<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Provider;
use App\User;
class LoginController extends Controller
{
     public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

  
    public function handleProviderCallback($provider)
    {
       
         $user = Socialite::driver($provider)->user();

         $checkUser=Provider::where('provider_id',$user->getId())->first();
         
         if(!$checkUser){
             //add new user

             $userGetReal=User::where('email',$user->getEmail())->first();

             if(!$userGetReal){
                 $userGetReal=new User();
                 $userGetReal->name=$user->getName();
                 $userGetReal->email=$user->getEmail();
                 $userGetReal->save();
                 
             }

             $newProvider=new Provider();
             $newProvider->provider_id=$user->getId();
             $newProvider->provider=$provider;
             $newProvider->user_id=$userGetReal->id;
             $newProvider->save();
             

         }else{
             // login user
              $userGetReal=User::find($checkUser->id);
         }
         auth()->login($userGetReal);
         return Redirect('/');
    }
}
