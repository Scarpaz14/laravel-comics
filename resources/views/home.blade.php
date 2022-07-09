@extends('layouts.base')

@section('head-title')
DC Comics 
@endsection

@section('page-content')
    <section id="main-section">
        <div class="container-main">
            <button class="btn_current_series">CURRENT SERIES</button>
            <div class="row">
                @foreach ($comics as $id => $card)
                <div class="col">
                    <a href="{{route('singolCard', ['id' => $id])}}">
                        <x-card-comics :image="$card['thumb']" :title="$card['title']"/>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

