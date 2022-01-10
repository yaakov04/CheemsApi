<?php

namespace App\Classes;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;

class elUniversal
{
    protected $page;
    protected $articles=[];

    public function __construct()
    {
        $puppeteer = new Puppeteer;
        $browser = $puppeteer->launch();
        $this->page = $browser->newPage();
    }

    protected function goTo($uri)
    {
        //
        $this->page->goto($uri,
        ['waitUntil' => 'networkidle2']);
    }

    protected function findArticles()
    {
        //
        $articles = $this->page->evaluate(JsFunction::createWithBody("
            let articles = [...document.querySelectorAll('article.ce9-TemasRelacionadosImagen')];
            articles = articles.map((e)=>{
                article = {
                    title: e.querySelector('h2').innerText,
                    link: e.querySelector('a').href,
                    excerpt: e.querySelector('p.ce9-TemasRelacionadosImagen_Nota').innerText,
                    img: e.querySelector('img').src
                }
                return article
            })
            
            return {
                articles : articles
            };
        "));

        $this->articles = $articles['articles'];
    }

    public function getArticles($uri)
    {
        $this->goTo($uri);
        $this->findArticles();
        return $this->articles;
    }
}