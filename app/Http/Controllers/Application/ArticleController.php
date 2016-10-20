<?php

namespace App\Http\Controllers\Application;

use App\Article;
use App\Base\Controllers\ApplicationController;
use App\Events\ArticleWasViewed;
use Event;
use Alaouy\Youtube\Facades\Youtube;

class ArticleController extends ApplicationController
{
    /**
     * Show the article.
     *
     * @param Article $article
     * @return Response
     */
    public function index(Article $article)
    {
        
        Event::fire(new ArticleWasViewed($article));
        return view('application.article.index', compact('article'));
    }
}
