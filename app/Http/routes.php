<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {



Route::get('/',['as'=> "static_welcome",
    "uses" => "HomeController@homepage"

]);

/*
 * Page contact
 * contact => URI (bout de l'url)
 */

Route::get('/contact', function() {
    // Retourne la vue contact
    return view('static/contact');
});

/*
 * Page concept
 *
 */

Route::get('/concept', function() {
    // Retourne la vue concept
    return view('static/concept');
});

/*
 * Page à Propos
 *
 */

Route::get('/apropos', function() {
    // Retourne la vue a propos
    return view('static/apropos');
});

/**
 * uses: Permettant d'appeler un Controller
 * Nom du Controller @ Action du Controller (methode du controller)
 */

Route::group(['prefix' => 'movies'], function(){

    Route::get('panier/{id}', [
        'as' => 'movies_panier',
        'uses' => 'MoviesControllers@panier'
    ]);

    Route::get('vider', [
        'as' => 'movies_vider',
        'uses' => 'MoviesControllers@vider'
    ]);

    Route::get('supr/{id}', [
        'as' => 'movies_supr',
        'uses' => 'MoviesControllers@supr'
    ]);

Route::get('/lister', [
    'as' => 'movies_lister',
    'uses' => 'MoviesControllers@lister'

]);

Route::get('/voir/{id}', [
    'as' => 'movies_voir',
    'uses' => 'MoviesControllers@voir'

])
    ->where('id', '[0-9]+');

Route::get('/creer', [
    'as' => 'movies_creer',
    'uses' => 'MoviesControllers@creer'

]);

    /**
     * Argument qui s'appelle id en URL
     * Argument {id}
     */
Route::get('/editer/{id}', [
    'as' => 'movies_editer',
    'uses' => 'MoviesControllers@editer'

])
    ->where('id', '[0-9]+');
    //where permet une restriction
    //au niveau de mon argument en URL

    //Route en post
    Route::post('/enregistrer', [
        'as' => 'movies_enregistrer',
        'uses' => 'MoviesControllers@enregistrer'

    ]);

    Route::get('/visible/{id}', [
        'as' => 'movies_visible',
        'uses' => 'MoviesControllers@visible'

    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'movies_supprimer',
        'uses' => 'MoviesControllers@supprimer'
    ]);
});

/**
 * CategoryControllers
 */
Route::group(['prefix' => 'category'], function() {


    Route::get('/lister', [
        'as' => 'category_lister',
        'uses' => 'CategoryControllers@lister'

    ]);

    Route::get('/voir/{id}', [

        'uses' => 'CategoryControllers@voir'

    ]);

    Route::get('/creer', [
        'as' => 'category_creer',
        'uses' => 'CategoryControllers@creer'

    ]);

    Route::get('/editer/{id}', [
        'uses' => 'CategoryControllers@editer'

    ]);

    //Route en post
    Route::post('/enregistrer', [
        'as' => 'category_enregistrer',
        'uses' => 'CategoryControllers@enregistrer'

    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'category_supprimer',
        'uses' => 'CategoryControllers@supprimer'
    ]);
});


/**
 * ActorsControllers
 */

Route::group(['prefix' => 'actors'], function() {

    Route::get('panier/{id}', [
        'as' => 'actors_panier',
        'uses' => 'ActorsControllers@panier'
    ]);

    Route::get('/lister', [
        'as' => 'actors_lister',
        'uses' => 'ActorsControllers@lister'

    ]);

    Route::get('/suppr/{id}', [
        'as' => 'actors_suppr',
        'uses' => 'ActorsControllers@suppr'

    ]);

    Route::get('/actualiser', [
        'as' => 'actors_actualiser',
        'uses' => 'ActorsControllers@actualiser'

    ]);

    Route::get('/voir', [
        'uses' => 'ActorsControllers@voir'

    ])
        ->where('id', '[0-9]+');

    Route::get('/creer', [
        'as' => 'actors_creer',
        'uses' => 'ActorsControllers@creer'

    ]);

    Route::get('/editer', [
        'uses' => 'ActorsControllers@editer'


    ])
        ->where('id', '[0-9]+');

    Route::post('/enregistrer', [
        'as' => 'actors_enregistrer',
        'uses' => 'ActorsControllers@enregistrer'

    ]);
    Route::get('/supprimer/{id}', [
        'as' => 'actors_supprimer',
        'uses' => 'ActorsControllers@supprimer'
    ]);
});

/**
 * DirectorsControllers
 */
Route::group(['prefix' => 'directors'], function() {

    Route::get('panier/{id}', [
        'as' => 'directors_panier',
        'uses' => 'DirectorsControllers@panier'
    ]);

Route::get('/lister', [
    'as' => 'directors_lister',
    'uses' => 'DirectorsControllers@lister'

]);

Route::get('/voir', [
    'uses' => 'DirectorsControllers@voir'

]);

Route::get('/creer', [
    'as' => 'directors_creer',
    'uses' => 'DirectorsControllers@creer'

]);

Route::get('/editer', [
    'uses' => 'DirectorsControllers@editer'

]);
    Route::post('/enregistrer', [
        'as' => 'directors_enregistrer',
        'uses' => 'DirectorsControllers@enregistrer'

    ]);

    Route::get('/supprimer/{id}', [
        'as' => 'directors_supprimer',
        'uses' => 'DirectorsControllers@supprimer'
    ]);

});


    /**
     * UserControllers
     */
    Route::group(['prefix' => 'user'], function() {

        Route::get('panier/{id}', [
            'as' => 'user_panier',
            'uses' => 'UserControllers@panier'
        ]);


        Route::get('/lister', [
            'as' => 'user_lister',
            'uses' => 'UserControllers@lister'

        ]);

        Route::get('/voir', [
            'uses' => 'UserControllers@voir'

        ]);

        Route::get('/creer', [
            'as' => 'user_creer',
            'uses' => 'UserControllers@creer'

        ]);

        Route::get('/editer', [
            'uses' => 'UserControllers@editer'

        ]);
        Route::post('/enregistrer', [
            'as' => 'user_enregistrer',
            'uses' => 'UserControllers@enregistrer'

        ]);

        Route::get('/supprimer/{id}', [
            'as' => 'user_supprimer',
            'uses' => 'UserControllers@supprimer'
        ]);

    });

});
