<?php

namespace App\Http\Controllers\Auth;

use App\Administrators;
use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'firstname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:administrators',
            'password' => 'required|confirmed|min:6',
            'description' => 'required|max:900',
        ],[
            'name.required' => 'Votre nom est requis',
            'firstname.required' => 'Votre prénom est requis',
            'name.max' => 'Votre nom est trop long',
            'firstname.max' => 'Votre prénom est trop long',
            'email.unique' => 'Votre email est déja utilisé',
            'email.required' => 'Votre email est requis',
            'password.required' => 'Votre mot de passe est requis',
            'password.min' => 'Votre mot de passe est trop court',
            'password.confirmed' => 'Votre mot de passe doit être identique',
            'description.required' => 'Une description est requise',
            'description.max' => 'Votre description est trop longue'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
            {
                // recupere avec la class Input et la methode file()
                $file = Input::file('photo');

                if(Input::hasFile('photo')){

                    $filename = $file->getClientOriginalName();
                    // recupere le nom original du fichier
                    $destinationPath = public_path().'/uploads/administrators';
                    // indique ou stocker le fichier
                    $file->move($destinationPath, $filename);
                }
        return Administrators::create([
            'lastname' => $data['name'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'description' => $data['description'],
            'photo' => asset('uploads/administrators/'.$filename),

        ]);
    }
}
