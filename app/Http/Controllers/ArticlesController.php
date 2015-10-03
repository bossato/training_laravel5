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
 
    /**
     * @param  Article $article
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $articles = $this->article->all();
 
        return view('articles.index')->with(compact('articles'));
    }
 
    /**
     * @param  $id
     * @return \Illuminate\View\View
     */
    public function getShow($id)
    {
        $article = $this->article->find($id);

        return view('articles.show')->with(compact('article'));
    }
 
    /**
     * @return \Illuminate\View\View
     */
    public function getCreate()
    {
        return view('articles.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(Request $request)
    {
        $form_data = $request->all();
        $this->article->fill($form_data);
        $this->article->save();
 
        return redirect()->to('articles/index');
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
