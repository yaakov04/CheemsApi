<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;


class Article extends Model
{
    use Sushi;


    public function getRows()
    {
        return getArticles();
    }

    

}
