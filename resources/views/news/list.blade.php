@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
  <div class="main mbmainb">
    <div class="title clearfix">
      <h2>最新福利</h2>
    </div>
    <ul class="clearfix">
        @foreach($newsList as $new)
            <li> <a href="{{ route('news.info', ['id' => $new->id]) }}"> <img src="{{ asset('uploads/' . $new->picture ) }}">
            <h2>{{ $new->title }}</h2>
            </a> </li>
        @endforeach
    </ul>
</div>
@endsection

@section('footer')
@endsection
