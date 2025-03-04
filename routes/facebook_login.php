<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth.facebook');

 
Route::get('/auth/facebook/callback', function () {
    try {
        $facebookUser = Socialite::driver('facebook')->user();
        $user = User::where('auth_id', $facebookUser->id)->first();
        if($user){
            Auth::login($user);
            return redirect()->route('dashboard');
        } else{
           $newUser = User::create([
              'name' => $facebookUser->name,
              'email' => $facebookUser->email,
              'password' => Hash::make('Password@123'),
              'auth_id' => $facebookUser->id,
            ]);
            if ($newUser){
                Auth::login($newUser);
            return redirect()->route('dashboard');
            }
        }
    } catch (Exception $e){
        dd($e);
    }
   
});