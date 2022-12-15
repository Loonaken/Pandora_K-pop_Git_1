@extends('app')

@section('title', 'トップページ')


@section('content')
@include('nav')
  <div class="container mt-4">
    <div class="border border-3 border-primary mb-3 text-center ">Pandora_k-popへようこそ</div>
    <div class="row">
      <div class="col-8 bg-success">
        <p>こんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</p>
        <a href="{{route('song.index')}}" class="btn btn-primary" role="button">曲へ移動</a>
      </div>
      <div class="col-4 bg-danger">
        <p> こんにちはこんにちはこんにちはこんにちはこんにちはこんにちは</p>

      </div>
    </div>
  </div>
@endsection
