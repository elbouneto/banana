<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 16/03/16
 * Time: 16:29
 */

namespace App\Http\Controllers;

use App\Http\Requests\UserRequests;
use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class UserControllers extends  Controller
{

    public function lister(){

        $user = User::all();

        return view("users/list", [
            "user" => $user
        ]);

    }

    public function voir($id){

        return view("users/vue", [
            'id' => $id
        ]);
    }

    public function creer(){

        return view("users/creer");
    }

    public function enregistrer(UserRequests $request){

        $username = $request->username;

        $user = new User();
        $user->username = $username;
        $user->save();

        return Redirect::route('user_lister');

        }

    public function supprimer($id){

        $user = User::find($id);
        $user->delete();

        return Redirect::route('user_lister');
    }

    public function editer($id){

              return view("users/editer",[ 'id' => $id
        ]);
    }
    public function panier(Request $request, $id){

        $user = User::find($id);

        $tab = $request->session()->get('id_user', []);
        $tab[$id] = $user->title;
        $request->session()->put('id_user', $tab);
        return Redirect::route('user_lister');
    }
}