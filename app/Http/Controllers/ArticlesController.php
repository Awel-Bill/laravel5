<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    //

  function index() {
    $articles = Article::latest()->get();
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

  public function store(Request $request){
//    dd($request->all());

//    $request->get('title');
    $input = $request->all();
    $input['publish_at'] = Carbon::now();
    $input['user_id'] = 1;
//    $input['updated_at'] = Carbon::now();
//    $input['created_at'] = Carbon::now();
    Article::create($input);
    return redirect('/articles');
  }

}
