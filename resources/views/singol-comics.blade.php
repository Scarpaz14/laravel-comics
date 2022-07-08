@extends('layouts.base')

@section('head-title')
{{$card['title']}}
@endsection

@section('page-content')
<div class="container-product">
    <div class="row text-center mt-5">
        <div class="col">
            <img class="img-fluid comics-img" src="{{$card['thumb']}}" alt="thumb">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-6">
            <h1>{{$card['title']}}</h1>
            <strong>{{$card['price']}}</strong>
            <p>{{$card['description']}}</p>
        </div>
        <div class="col">
            <img src="{{asset('image/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
    
@endsection