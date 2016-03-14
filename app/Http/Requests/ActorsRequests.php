<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 11/03/16
 * Time: 09:45
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class ActorsRequests extends FormRequest
{

    public function rules(){

        return [

            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3|max:30',
        ];

    }


    public function message()
    {

        return [
            'firstname.required' => 'Le Prénom est obligatoire',
            'lastname.required' => 'Le Nom est obligatoire',
            'firstname.min' => 'Le Prénom est trop court',
            'firsname.max' => 'Le Prénom est trop long',
            'lastname.min' => 'Le Nom est trop court',
            'lastname.max' => 'Le Nom est trop long'
        ];
    }

    public function authorize(){
        return true;
    }
}