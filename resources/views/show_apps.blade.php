@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
    <div class="appmain">
      <div class="wrap">
    <div class="tabs tabsapp"> <a href="#" hidefocus="true" class="active">{{ $title }}</a> <a href="#" hidefocus="true"></a></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($apps as $app)
                  <li><a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> 
                <!-- <strong>1</strong> -->
                <img src="{{ asset('uploads/' . $app->logo) }}">
                <h2>{{ $app->name }}</h2>
                <p>{{ $app->keywords }}</p>
                <button>去赚钱</button>
                </a></li>
              @endforeach
              </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection

@section('footer')
@endsection
