@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
<div class="main mbmainb">
    <div class="title clearfix">
      <h2>{{ $new->title }}</h2>
    </div>
    <ul class="clearfix">
        <p> 时间: &nbsp; {{ $new->published_date }}</p>
    </ul>
</div>
<div class="main mbmainb">
    <p>{!! $new->content !!}</p>
</div>
@endsection

@section('footer')
@endsection
