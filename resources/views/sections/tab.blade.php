<div class="wrap">
    <div class="tabs"> <a href="#" hidefocus="true" class="active">苹果赚钱</a> <a href="#" hidefocus="true">安卓赚钱</a> <a href="#" hidefocus="true">综合赚钱</a> </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($appleNewsTab as $app)
                <li> <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
                  <h2>{{ $app->name }}</h2>
                  </a> </li>
              @endforeach

              @foreach($appleHotsTab as $app)
                <li> <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
                  <h2>{{ $app->name }}</h2>
                  </a> </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($androidTab as $app)
                <li> <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
                  <h2>{{ $app->name }}</h2>
                  </a> </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($zhTab as $app)
                <li> <a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"> <img src="{{ asset('uploads/' . $app->logo) }}">
                  <h2>{{ $app->name }}</h2>
                  </a> </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>