<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Request;

class UsersController extends Controller
{
  public function register() {
    if (Request::isMethod('post')) {
        User::create([
                    'name' => Request::get('name'),
                    'email' => Request::get('email'),
                    'password' => bcrypt(Request::get('password')),
        ]);
    } 

    return view('login');
  }
  
  public function authenticate() {
    if (Auth::attempt(['email' => Request::get('email'), 'password' => Request::get('password')])) {
        return redirect()->intended('checkout');
    } else {
        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
  }
  
  public function checkout() {
      return redirect()->action('ContentsController@create');
  }
  
  public function login()
  {
    return view('login');
  }

  public function logout()
  {
    Auth::logout();

    return view('login');
  }
}
