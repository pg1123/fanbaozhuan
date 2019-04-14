<div id="mbheader">
    <div class="mbheader clearfix">
      <a href="/"><h1>饭宝赚</h1></a>
      <div class="clearfix">
        <input type="text" placeholder="搜索您想要的内容">
        <button>搜索</button>
      </div>
    </div>
    <ul class="clearfix">
      <li @if( $_SERVER['REQUEST_URI'] == '/') class="mbactive" @endif><a href="{{ route('index.index') }}">首页</a></li>
      <li @if( $_SERVER['REQUEST_URI'] == '/apple') class="mbactive" @endif ><a href="{{ route('index.catApps',['cat' => 'apple']) }}">苹果赚钱</a></li>
      <li @if( $_SERVER['REQUEST_URI'] == '/android') class="mbactive" @endif><a href="{{ route('index.catApps',['cat' => 'android']) }}">安卓赚钱</a></li>
      <li @if( $_SERVER['REQUEST_URI'] == '/yuedu') class="mbactive" @endif><a href="{{ route('index.catApps',['cat' => 'yuedu']) }}">阅读赚钱</a></li>
      <li @if( $_SERVER['REQUEST_URI'] == '/zh') class="mbactive" @endif><a href="{{ route('index.catApps',['cat' => 'zh']) }}">综合赚钱</a></li>
    </ul>
</div>
