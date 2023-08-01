<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   
  public function Authenticate(Request $request){
    
    $credentials = ['username'=>$request->all()['username'],'password'=>$request->all()['password'], 
    'usertype' => $request->input('usertype')];
    if(Auth::attempt($credentials))
    { 
     $user=User::where('username',$request->all()['username'])->get();
     if(($user[0]['usertype'])=='client')
     return redirect()->route('catalogue-produits');
     else
     return redirect()->route('ajouter-categorie-produit');
    }
        
        else
        return redirect('/login')
        ->withErrors($credentials)
        ->withInput();
  }
}
