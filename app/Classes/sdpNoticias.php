<?php

namespace App\Classes;

use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Data\JsFunction;

class sdpNoticias
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
            let articles = [...document.querySelectorAll('.queryly_item_row')];
            articles = articles.map((e)=>{
                let linkImg = (e)=>{
                        let img = e.querySelector('div.queryly_advanced_item_imagecontainer')
                        let style = img.currentStyle || window.getComputedStyle(img, false)
                        let bi = style.backgroundImage.slice(4, -1).replace(/\"/g, \"\")
                        return bi
                    }
                let article = {
                    title: e.querySelector('div.queryly_item_title').innerText,
                    link: e.querySelector('a').href,
                    excerpt: e.querySelector('div.queryly_item_description').innerText,
                    img: linkImg(e)
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