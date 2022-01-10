<?php

namespace App\Classes;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;

class elTiempo
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
            let articles = [...document.querySelectorAll('.listing-item')];
            articles = articles.map((e)=>{
                article = {
                    title: e.querySelector('a.title.page-link').innerText,
                    link: e.querySelector('a.title.page-link').href,
                    excerpt: e.querySelector('a.epigraph.page-link').innerText,
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