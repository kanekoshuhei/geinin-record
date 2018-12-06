@extends('layout.common')

@section('title', '芸人RECORD')
@section('keywords', 'A,B,C')
@section('description', '説明文')
@section('pageCss')
@endsection

@include('layout.head')

@include('layout.header')

@section('content')
<div class="container">
  <div class="text-right">
    <p style="margin: 15px 0 0 0;">並び替え：<a href="/?orderby=name">名前</a>&nbsp;<a href="/?orderby=formed_year">芸歴</a></p>
  </div>
  <div class="row">
    @foreach ($geinins as $geinin)
    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
      <a href="/show/{{ $geinin->id }}">
        <div class="card" style="margin:15px 0;">
          <img class="card-img-top" src={{"https://i.ytimg.com/vi/" . $geinin->image . "/mqdefault.jpg"}}>
          <div class="card-body text-center" style="background:none; padding:10px;">
            <p class="card-title" style="color:#5A6169;"><strong>{{ $geinin->name }}</strong></p>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection

@include('layout.sub')

@section('pageSub')
  <p>個別サイドバーの内容</p>
@endsection

@section('pageJs')
  <script src="/js/page.js"></script>
@endsection

{{-- @include('layout.footer') --}}