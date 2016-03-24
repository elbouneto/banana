<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 23/03/16
 * Time: 16:33
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdministratorRequest extends FormRequest
{

    public function rules(){

       return[
           'name' => 'required|max:255',
           'firstname' => 'required|max:255',
           'email' => 'required|email|max:255|unique:administrators,email,'.Auth::user()->id,
           'password' => 'confirmed|min:6',
           'description' => 'required|max:900',
           'photo' => 'image',
       ];

    }


    public function messages()
    {
        return[
            'name.required' => 'Votre nom est requis',
            'firstname.required' => 'Votre prénom est requis',
            'name.max' => 'Votre nom est trop long',
            'firstname.max' => 'Votre prénom est trop long',
            'email.unique' => 'Votre email est déja utilisé',
            'email.required' => 'Votre email est requis',
            'password.min' => 'Votre mot de passe est trop court',
            'password.confirmed' => 'Votre mot de passe doit être identique',
            'description.required' => 'Une description est requise',
            'description.max' => 'Votre description est trop longue'
        ];
    }

    public function authorize(){
        return true;
    }


}