<?php

namespace App\Http\Controllers;
use App\Actors;
use App\Http\Requests\ActorsRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller
 * et doit hériter de ma classe Controller
 *
 */
class ActorsControllers extends Controller{



    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function lister(){

        $actors = Actors::all();

        //dump($actors);
        // retourner une vue
        return view("actors/list", [
            "actors" => $actors
        ]);
    }

    public function voir($id){

        dump($id);

        // retourner une vue
        return view("actors/vue", [ 'id' => $id
        ]);
    }

    public function creer(){

        // retourner une vue
        return view("actors/creer");
    }

    public function enregistrer(ActorsRequests $request){

        $firstname = $request->firstname;

        $lastname = $request->lastname;

        $actors = new Actors();
        $actors->firstname = $firstname;
        $actors->lastname = $lastname;
        $actors->save();

        return Redirect::route('actors_lister');


    }

    public function supprimer($id){

        $actors = Actors::find($id);
        $actors->delete();

        return Redirect::route('actors_lister');
    }

    public function editer($id){

        // var_dump($variable) <=> dump()
        // Deboger mon id
        // dump est une fonction de debogage d'une variable
        dump($id);
        // Le Transporteur transporte mes données à la vue
        return view("actors/editer",[ 'id' => $id
        ]);
    }

}