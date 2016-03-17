<?php

namespace App\Http\Controllers;
use App\Http\Requests\MoviesRequests;
use App\Movies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller
 * et doit hériter de ma classe Controller
 *
 */
class MoviesControllers extends Controller{

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function lister(Request $request){

        /* all() Récupère tous mes films*/
        $movies = Movies::all();

        //dump($movies);

        $id_movies = $request->session()->get('id_movies');

        //dump($id_movies);

        // retourner une vue
        return view("movies/list",[
            "movies" => $movies
        ]);
    }

    public function voir($id){

        // find() permet de retrouver un objet par son id

        $movies = Movies::find($id);

        // retourner une vue
        return view("movies/vue", [ 'movies' => $movies
        ]);
    }

    public function creer(){

        // retourner une vue
        return view("movies/creer");
    }

    public function enregistrer(MoviesRequests $request){

        $titre = $request->titre;

        $synopsis = $request->synopsis;

        $languages = $request->languages;

        $bo = $request->bo;

        $annee = $request->annee;

        $date = \DateTime::createFromFormat('d/m/Y','date_release');

        $movies = new Movies();
        $movies->title = $titre;
        $movies->synopsis = $synopsis;
        $movies->languages = $languages;
        $movies->bo = $bo;
        $movies->annee = $annee;
        $movies->date_release = $date->format('Y-m-d');

        $movies->save();

        return Redirect::route('movies_lister');

    }

    public function editer($id){

        // var_dump($variable) <=> dump()
        // Deboger mon id
        // dump est une fonction de debogage d'une variable
       // dump($id);
        // Le Transporteur transporte mes données à la vue
        return view("movies/editer",[ 'id' => $id
        ]);
    }

    public function visible($id){
        $movies = Movies::find($id);

        if($movies->visible == 0){
            $movies->visible = 1;
        }else{
            $movies->visible = 0;
        }
        $movies->save();

        return Redirect::route('movies_lister');
    }

    public function supprimer($id){

        $movies = Movies::find($id);
        $movies->delete();

        return Redirect::route('movies_lister');
    }

    public function panier(Request $request, $id){
        $movies = Movies::find($id);

        //1.enregistrer en session l'id
        // la requete fait appel a la session et put() permet d'enregistrer en session
        // a base d'une clé : id_movies , et d'une valeur: $id

        //get() je recupere en session mon tableau
        //par sa cle 'id_movies'
        // si mon tableau n'existe pas en session
        // j'initialise un tableau vide

        $tab = $request->session()->get('id_movies', []);
        $tab[$id] = $movies->title; //ajouter mon id dans ce tableau


        // Enregistrer mon tableau de movies
        $request->session()->put('id_movies', $tab);

        //2.rediriger vers la liste des films

        return Redirect::route('movies_lister');


    }
}