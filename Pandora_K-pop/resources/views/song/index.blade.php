@extends('app')

@section('title')
ランダム曲ページ||{{ config('app.name')}}
@endsection

@section('content')
@include('nav')

<div class="container mt-4">
  @foreach ($songs as $song)
  <div class="card m-3">
    <a href="{{$song->youtube_link}}"><img src="{{$song->mv_image}}" class="card-img-top"></a>
    <div class="card-body">
      <div class="card-title">
        <h3>{{$song->group}}</h3>
        <div class="card-subtitle">
          <h5>{{$song->title}}</h5>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
