<?php
/**
 * Created by PhpStorm.
 * User: wal01
 * Date: 08/03/16
 * Time: 12:03
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{

    protected $table = "categories";


    public function getNbCategory()
    {
        $nbcategory = DB::table('categories')
            ->count();
        return $nbcategory;
    }




}