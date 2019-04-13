@extends('base')
@section('title', '饭宝赚')
@section('csses')
@endsection

@section('content')
  @include('sections.two_tab',['title1'=>'最新', 'title2' => '推荐'])
@endsection

@section('footer')
@endsection
