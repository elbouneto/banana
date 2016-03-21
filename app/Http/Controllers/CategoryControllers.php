<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\CategoriesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller
 * et doit hériter de ma classe Controller
 *
 */
class CategoryControllers extends Controller{

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function lister(){

        $category = Category::all();

        //dump($category);

        // retourner une vue
        return view("category/list", [
            "category" => $category
        ]);
    }

    public function voir($id){

        // retourner une vue
        return view("category/vue", [ 'id' => $id
        ]);
    }

    public function creer(){
        // retourner une vue
        return view("category/creer");
    }

    /**
     * Enregistrer un film en base de données depuis mes données soumises en formulaire
     */
    public function enregistrer(CategoriesRequests $request){

        $titre = $request->title; //title est le name de mon champs
                                  // $request->title <=> $_POST['title']
                                                // $_POST['description']
        $description = $request->description;

        $file = $request->image;

        $category = new Category();

        //si ma requete contient un fichier de name image

        if($request->hasFile('image')){
            $filename = $file->getClientOriginalName();
            $destinationPath = public_path().'/uploads/categories';
            //Indique ou stocker le fichier

            $file->move($destinationPath, $filename);
            //Déplace le fichier

            // ma colonne image qui sera le chemin vers mon fichier
            $category->image = asset('uploads/categories/'.$filename);
        }

        // 2eme etape: creation en base de donnée du nouveau film

        $category->title = $titre;
        $category->description = $description;
        $category->save();

        //save() permet de sauvegarder mon objet en base de données

        //3eme etape: redirection a partir de ma route
        return Redirect::route('category_lister');

    }

    public function supprimer($id){

        $category = Category::find($id);
        $category->delete();

        return Redirect::route('category_lister');

    }

    public function editer($id){

        // retourner une vue
        return view("category/editer",[ 'id' => $id
        ]);    }

}