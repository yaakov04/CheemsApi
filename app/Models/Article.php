<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

define('Articles', getArticles());

class Article extends Model
{
    use Sushi;

    protected $rows = Articles;

}
