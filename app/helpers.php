<?php

use App\Models\Newspaper;

if (!function_exists('getArticles')) {
     function getArticles ()
     {
        $newsPapers = Newspaper::all()->toArray();
        $articles=[];
        foreach ($newsPapers as $newsPaper) {
            $object = new $newsPaper['className'];
            $articlesArray = $object->getArticles($newsPaper['uri']);
            foreach ($articlesArray as $article) {
                $article['newspaper']=$newsPaper['name'];
                $articles[]=$article;
            }
        }
        return $articles;
     }
 }