    <div class="appmain">
      <div class="wrap">
    <div class="tabs tabsapp"> <a href="#" hidefocus="true" class="active">{{ $title1 }}</a> <a href="#" hidefocus="true">{{ $title2 }}</a></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">

              @foreach($newApps as $key => $app)
                <li><a href="{{ $app->picture ? route('index.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}">
                 
                <strong @if ($key > 2) class="grey" @endif >{{ $key + 1 }}</strong>
                <img src="{{ asset('uploads/' . $app->logo) }}">
                <h2>{{ $app->name }}</h2>
                <p>{{ $app->keywords }}</p>
                <button>去赚钱</button>
                </a></li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($hotApps as $app)
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