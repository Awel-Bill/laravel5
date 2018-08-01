<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //

  function index() {
    $articles = Article::all();
    return view('articles.index',compact('articles')) ;
  }

  /**
   * @param $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  function show($id) {
    $article = Article::find($id);
    return view('articles.show',compact('article'));
  }

  /**
   * create articles
   */
  function create() {
    return view('articles.create');
  }
}
