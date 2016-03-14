<?php

namespace App\Http\Controllers;

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

        // retourner une vue
        return view("actors/list");
    }

    public function voir(){

        // retourner une vue
        return view("actors/vue");
    }

    public function creer(){

        // retourner une vue
        return view("actors/creer");
    }

    public function editer(){

        // retourner une vue
        return view("actors/editer");
    }

}