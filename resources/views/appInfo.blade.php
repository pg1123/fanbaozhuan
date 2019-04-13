@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
     <div class="demain">
      <div class="demain1">
         <img src="{{ asset('uploads/' . $app->logo) }}">
         <h2>{{ $app->name }}</h2>
         <p>240372次下载&nbsp;丨&nbsp;北京爱普优邦科技有限公司</p>
         <p>任务更新时间集中在15:00~18:00</p>
         <button id="start" data-url = "{{ $app->url }}">开始赚钱</button>
      </div>
    <div class="demain3">
        <div class="title clearfix">
            <h2>特别注意</h2>
        </div>
        <p>特别注意：该平台任务助手下载安装后需要在“设置-通用-设备管理”中添加信任方可使用</p>
        <div class="clearfix">
            <img src="{{ asset('uploads/images/icon/set1.png') }}" /><img src="{{ asset('uploads/images/icon/set2.png') }}" /><img src="{{ asset('uploads/images/icon/set3.png') }}" /><img src="{{ asset('uploads/images/icon/set4.png') }}" />
        </div>
    </div>

      <div class="demain2">
      <div class="title clearfix">
      <h2>应用介绍</h2>
    </div>
    <p>
一款可以赚钱的手机试玩软件，每天大量试玩任务，零投入收益远超XX宝，赶快加入吧~ 
</p>
    <div class="clearfix">
        @foreach($app->picture as $pic)
            <img src="{{ asset('uploads/' . $pic) }}" />
        @endforeach
    </div>
    </div>

      <div class="demain4">
       <div class="title clearfix">
      <h2>下载此平台的人也下载了</h2>
    </div>
    <ul class="clearfix">
        @foreach($jpApps as $app)
        <li> <a href="{{ action('IndexController@appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) }}"> <img src="{{ asset('uploads/' . $app->logo) }}">
          <h2>{{ $app->name }}</h2>
          </a> 
        </li>
        @endforeach
    </ul>
      </div>
  </div>
@endsection

@section('footer')
@endsection

@section('scripts')
<script type="text/javascript">
$('#start').on('click', function(event) {
    event.preventDefault();
    //window.location.href = $(this).data('url');
    window.open($(this).data('url'));
    window.history.back(-1);
});
</script>
@endsection
