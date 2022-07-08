@extends('layouts.base')

@section('head-title')
{{$card['title']}}
@endsection

@section('page-content')
<div class="row text-center mt-5">
    <div class="col">
        <img class="img-fluid" src="{{$card['thumb']}}" alt="thumb">
    </div>
</div>
<div class="row text-center">
    <div class="col">
        <h1>{{$card['title']}}</h1>
    </div>
</div>
    
@endsection