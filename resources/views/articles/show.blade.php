@extends('app')
@section('content')
  <h1 class="text-center">
    {{$article -> title}}
  </h1>
  <hr>
    <article>
      <div class="body">
        {{$article -> content}}
      </div>
   </article>
@stop