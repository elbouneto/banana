<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 11/03/16
 * Time: 10:09
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class MoviesRequests extends FormRequest

{

    public function rules(){

        return [
            'title' => 'required|min:5|regex:/^[A-Za-z0-9 ]+$/|unique:movies',
            'synopsis' => 'required|min:10|max:600',
            'langue'=>'required|in:en,fr,es',
            'bo'=>'required|in:vo,vost,vostfr',
            'annee'=>'required|digits:4',
            'date_release'=>'required|date_format:d/m/Y',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'le titre est obligatoire',
            'synopsis.required'=>'le synopsis est obligatoire',
            'langue.required'=>'la langue est obligatoire',
            'annee.required'=>'annee est obligatoire',
            'date_release.required'=>'la date de sortie est obligatoire',
            'title.min'=>'le titre est trop court',
            'title.regex'=>'Le titre est de mauvais format',
            'title.max'=>'le titre est trop long',
            'synopsis.min'=>'la description est trop longue',
            'synopsis.max'=>'la description est trop courte',
            'langue.in'=>'la langue est incorrecte(en,es,fr)',
            'bo.required'=> 'La bande son est obligatoire',
            'bo.in'=>'la bo est incorrecte(vo,vost,vostfr)',
            'annee.digits'=>'annee doit faire 4 chiffres',
            'title.unique'=>'ce titre a déjà été utilisé',
        ];
    }
    public function authorize(){
        return true;
    }




}