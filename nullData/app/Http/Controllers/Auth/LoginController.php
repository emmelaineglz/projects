<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\JWTService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;

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
     * @param Request    $request
     * @param JWTService $JWTService
     *
     * @return mixed
     */
    public function login(Request $request, JWTService $JWTService)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
          $userExit = User::where('email',$request->email)->firstOrFail();
          $response = $JWTService->generate($userExit);
          if (!isset($response['error'])) {
              return redirect()->to('home');
          }
        }

          return redirect()
              ->back()
              ->with('error', 'Usuario y/o contraseña incorrecta')
              ->withInput();

      }
}
