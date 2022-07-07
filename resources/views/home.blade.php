@extends('layouts.base')

@section('head-title')
DC Comics 
@endsection

@section('page-content')
<section>
    <div class="container">
        @foreach ($comics as $card)
        <div class="singol-card">
            <div class="card">
                <img style="width: 70px" src="{{$card['thumb']}}" alt="thumb">
                <div class="title">
                    <small>{{$card['title']}}</small>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</section>


@endsection
