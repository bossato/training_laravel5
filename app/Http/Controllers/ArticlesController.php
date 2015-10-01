<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * @var Article
     */
    protected $article;

    /**
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }
 
    public function getIndex()
    {
        $articles = $this->article->all();
 
        return view('articles.index')->with(compact('articles'));
    }
 
    public function getShow($id)
    {
        $article = $this->article->find($id);

        return view('articles.show')->with(compact('article'));
    }
 
    public function getCreate()
    {
 
    }

    public function postCreate()
    {
 
    }

    public function getEdit()
    {
 
    }

    public function postEdit()
    {

    }
 
    public function postDelete()
    {
 
    }
}
