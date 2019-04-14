@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
  <div class="fan-slider">
    <div id="fan-home-slider" class="flexslider">
       <ul class="slides">
        <li class="clone">
          <div class="slide"> <a href="#"><img src="{{ asset('uploads/images/banner1.png') }}" alt=""></a> </div>
        </li>
        <li>
          <div class="slide"> <a href="#"><img src="{{ asset('uploads/images/banner2.png') }}" alt=""></a> </div>
        </li>
        <li>
          <div class="slide"> <a href="#"><img src="{{ asset('uploads/images/banner3.png') }}" alt=""></a> </div>
        </li>
        <li>
          <div class="slide"> <a href="#"><img src="{{ asset('uploads/images/banner4.jpg') }}" alt=""></a> </div>
        </li>
        <li>
          <div class="slide"> <a href="#"><img src="{{ asset('uploads/images/banner5.jpg') }}" alt=""></a> </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="notic clearfix">
    <div id="container" class="banner n_banner clearfix"> <i class="fa fa-volume-up" aria-hidden="true"></i>
    <img src="{{ asset('uploads/images/icon/gonggao.png') }}" alt="" style="width: 18px;display: inline;float: left;;
    margin-top: 10px;">
      <ol>
        <li style="margin-top: 0px;"><a href="http://sc.chinaz.com/" target="_blank">添加微信客服: fbz662</a></li>
        <li style="margin-top: 0px;"><a href="http://sc.chinaz.com/" target="_blank">每天下午3点任务最多</a></li>
      </ol>
      <div class="mouse_direction">
        <div class="mouse_top"></div>
        <div class="mouse_bottom"></div>
      </div>
    </div>
    <!-- <button id="gonglue" data-url="/portal/Index/gonglue">
    <a href="">试玩攻略</a>
    </button> -->
    <div id="gonlue"></div>
  </div>
  <div class="main mbmaina mbmainc">
    <ul class="clearfix">
      <li> <a href="{{ route('index.show',['type' => 'bibei']) }}"> <img src="{{ asset('uploads/images/icon/icon1.jpg') }}"><h2>必备</h2></a></li>
      <li> <a href="{{ route('index.show',['type' => 'new']) }}"> <img src="{{ asset('uploads/images/icon/icon2.jpg') }}"><h2>最新</h2></a></li>
      <li> <a href="{{ route('index.show',['type' => 'order']) }}"> <img src="{{ asset('uploads/images/icon/icon3.jpg') }}"><h2>排行</h2></a></li>
      <li> <a href="#"> <img src="{{ asset('uploads/images/icon/icon4.jpg') }}"><h2>红包</h2></a></li>
  
    </ul>
  </div>
  <div class="main mbmaina">
    <div class="title clearfix">
      <h2>今日推荐</h2>
    </div>
    <ul class="clearfix">
      @foreach($jpApps as $app)
      <li> <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
        <h2>{{ $app->name }}</h2>
        <button>去赚钱</button>
        </a> </li>
      @endforeach
    </ul>
  </div>
  <div class="main mbmain">
    <div class="title clearfix">
      <h2>最热门手赚</h2>
    </div>
    <ul>
      @foreach($hotApps as $app)
      <li>
        <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
          <h2> {{ $app->name }}<!-- <span>新手</span> <span class="sp1">提现秒到账</span> --> </h2>
          <p>{{ $app->keywords }}</p>
          <button>去赚钱</button>
        </a>
      </li>
      @endforeach
    </ul>
    <h3>多平台一起操作收益翻倍</h3>
  </div>
  @include('sections.tab')
  @include('sections.articles')
  
@endsection

@section('footer')
@endsection
