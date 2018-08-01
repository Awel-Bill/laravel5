@extends('app')
@section('content')
  <h1 class="text-center">Articles</h1>
  <hr>
  @foreach($articles as $article)
{{--    <h2><a href="{{url('articles',$article->id)}}">{{$article -> title}}</a></h2>--}}
{{--两种等价的方式--}}
    <h2><a href="{{action('ArticlesController@show',[$article->id])}}">{{$article -> title}}</a></h2>
    <article>
    <div class="body">
      {{$article -> content}}
    </div>
  </article>
  @endforeach
@stop