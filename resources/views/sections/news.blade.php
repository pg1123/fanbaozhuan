<div class="main mbmainb">
    <div class="title clearfix">
      <h2>最新福利</h2>
      <a href="{{ route('news.list') }}">更多</a></div>
    <ul class="clearfix">
        @foreach($news as $new)
            <li> <a href="{{ route('news.info', ['id' => $new->id]) }}"> <img src="{{ asset('uploads/' . $new->picture ) }}">
            <h2>{{ $new->title }}</h2>
            </a> </li>
        @endforeach
    </ul>
</div>