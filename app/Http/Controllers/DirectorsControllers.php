<?php

namespace App\Http\Controllers;
use App\Directors;
use App\Http\Requests\DirectorsRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller
 * et doit hériter de ma classe Controller
 *
 */
class DirectorsControllers extends Controller{

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function lister(){

        $directors = Directors::all();
        // retourner une vue
        return view("directors/list",[
            "directors" => $directors
        ]);
    }

    public function voir(){

        // retourner une vue
        return view("directors/vue", [ 'id' => $id
        ]);    }

    public function creer(){

        // retourner une vue
        return view("directors/creer");
    }

    public function enregistrer(DirectorsRequests $request){

        $firstname = $request->firstname;

        $lastname = $request->lastname;

        $file = $request->image;

        $directors = new Directors();

        if($request->hasFile('image')){
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/directors';

            $file->move($destinationPath, $filename);

            $directors->image = asset('uploads/directors/'.$filename);
        }

        $directors->firstname = $firstname;
        $directors->lastname = $lastname;
        $directors->save();

        return Redirect::route('directors_lister');


    }
    public function supprimer($id){

        $actors = Directors::find($id);
        $actors->delete();

        return Redirect::route('directors_lister');
    }

    public function editer(){

        // retourner une vue
        return view("directors/editer",[ 'id' => $id
        ]);    }

    public function panier(Request $request, $id){

        $director = Directors::find($id);

        $tab = $request->session()->get('id_directors', []);
        $tab[$id] = $director->title;
        $request->session()->put('id_directors', $tab);
        return Redirect::route('directors_lister');
    }

}