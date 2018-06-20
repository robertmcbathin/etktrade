<?php

namespace App\Http\Controllers\Auth;

use DB;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        /**
         * СУЩЕСТВУЕТ ЛИ ПОЛЬЗОВАТЕЛЬ
         * @var [type]
         */
        $user_isset = DB::table('users')
        ->where('email',$request->email)
        ->first();
        /**
         * ЕСЛИ ПОЛЬЗОВАТЕЛЬ СУЩЕСТВУЕТ
         */
        if ($user_isset !== NULL){
            /**
             * ЕСЛИ ПОЛЬЗОВАТЕЛЬ АКТИВИРОВАН
             * @var [type]
             */
            if ($user_isset->is_active == 1){
                /**
                 * ЕСЛИ ПОПЫТКА ЛОГИНА ПРОШЛА УСПЕШНО
                 */
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                        return redirect()->route('profile.show-profile-page.get');
                } else {
                    Session::flash('error', 'Ошибка авторизации');
                    return redirect()->back();
                }
            } else {
                /**
                 * ПОЛЬЗОВАТЕЛЬ НЕ АКТИВИРОВАН
                 */
                Session::flash('error', 'Данный аккаунт не активирован! Проверьте почту, указанную при регистрации в личном кабинете ЕТК.');
                return redirect()->route('login');
            }
        } else {
            /**
             * ПОЛЬЗОВАТЕЛЬ НЕ СУЩЕСТВУЕТ
             */
            Session::flash('error', 'Данный аккаунт не существует или был удален');
            return redirect()->route('login');
        } 
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('site.show-index.get');
    }
}
