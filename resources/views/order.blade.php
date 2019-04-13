@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
    <div class="appmain">
      <div class="wrap">
    <div class="tabs tabsapp"> <a href="#" hidefocus="true" class="active">排序</a> <a href="#" hidefocus="true"></a></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($orderApps as $app)
                  <li><a href="{{ action('IndexController@appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) }}"> 
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
