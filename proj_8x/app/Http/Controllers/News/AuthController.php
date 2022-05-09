<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Http\Requests\AuthLoginRequest as MainRequest;
use App\Models\UserModel;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AuthController extends Controller
{
    private $pathViewController = 'news.pages.auth.';
    private $controllerName = 'auth';
    private $params         = array();
    private $model;

    public function __construct()
    {
        view()->share('controllerName', $this->controllerName);
    }

    public function login(Request $request)
    {
        return view($this->pathViewController . 'login');
    }

    public function postLogin(MainRequest $request)
    {
        if ($request->method() === 'POST') {
            $params = $request->all();

            $user_data = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => 'active',
            ];

            if(Auth::attempt($user_data))
            {
                return redirect()->route('home');
            }
            else
            {
                return redirect()->route($this->controllerName . '/login')->with('news_notify', trans('notify.auth_login'));
            }

        }
    }

    public function logout(Request $request)
    {
        return redirect(route('auth/login'))->with(Auth::logout());
    }
}
