@extends('layout.common')

@section('title', 'ページタイトル')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
<div class="container">
  <br>
  <div class="center-block">
    <img class="img-fluid mx-auto d-block" src={{$youtubes[0]['items'][0]['snippet']['thumbnails']['high']['url']}} />
  </div>
  <div class="text-center">
    <h1 style="margin-top: .5rem;"><strong>{{ $geinin->name }}</strong></h1>
  </div>
  <hr>
  @if (!empty($geinin->member_1))
    <p>メンバー：{{ $geinin->member_1 }}&nbsp;{{ $geinin->member_2 }}&nbsp;{{ $geinin->member_3 }}&nbsp;{{ $geinin->member_4 }}&nbsp;{{ $geinin->member_5 }}</p>
  @endif
    <p>事務所：{{ $geinin->office }}</p>
    <p>結成年：{{ $geinin->formed_year }}年</p>
  <hr>

  <div>
    <h1>
      <i class="fab fa-youtube text-danger"></i>
    </h1>
  </div>

  <div class="row">
  @foreach ($youtubes as $youtube)
  <div class="col-6">
    <div class="card" style="margin-bottom:15px;">
      <iframe class="card-img-top" src={{"https://www.youtube.com/embed/" . $youtube['items'][0]['id'] . "?showinfo=0"}} frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
      </iframe>
      <div class="card-body" style="background:none; padding:10px;">
        <p class="card-title">{{$youtube['items'][0]['snippet']['title']}}</p>
      </div>
    </div>
  </div>
  @endforeach
  </div>

</>
@endsection

@include('layout.sub')

@section('pageSub')
    <p>個別サイドバーの内容</p>
@endsection

@section('pageJs')
<script src="/js/page.js"></script>
@endsection

{{-- @include('layout.footer') --}}