<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
       |--------------------------------------------------------------------------
       | Register Controller
       |--------------------------------------------------------------------------
       |
       | This controller handles the registration of new users as well as their
       | validation and creation. By default this controller uses a trait to
       | provide this functionality without requiring any additional code.
       |
       */
    use RegistersUsers;

    public $redirectTo = '/user/login';


    public function __construct()
    {
        if (Auth::check())
            return redirect($this->redirectTo);
    }


    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    protected function create(Request $data)
    {
        $array = array(
            "name" => $data['name'],
            "email" => $data['email'],
            'password' => $data['password']
        );
        $this->validator($array);
        $array["password"] = bcrypt($data['password']);
        User::create($array);
        return redirect($this->redirectTo);
    }

    public function showRegistrationForm()
    {
        return view('Auth.register');
    }
}
