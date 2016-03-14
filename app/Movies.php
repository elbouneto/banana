<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 08/03/16
 * Time: 11:43
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Movies
 * Modelise toutes mes requetes concernant la table Movies
 * @package App
 */
class Movies extends Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";
}