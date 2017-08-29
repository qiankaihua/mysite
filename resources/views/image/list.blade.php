@extends('image.index')
@section('title')
    {{ $name }}
@endsection
@section('content')
    @foreach($imgs as $img)
    <div class="cd-full-width container row col-md-12 content first-content" style="margin-top: 40px; text-align: center">
        <img src= {{ $img->url }} alt= {{ "".$img->intro }}><br>
        <h1> {{ $img->id }} </h1>
        <h3> {{ $img->intro }} </h3>
        <hr>
    </div>
    @endforeach
    <div id="pull_right">
       <div class="pull-right">
          {{ $imgs->links() }}
       </div>
    </div>
@endsection
