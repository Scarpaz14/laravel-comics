@extends('layouts.base')

@section('head-title')
DC Comics 
@endsection

@section('page-content')
    <section id="main-section">
        <div class="container-main">
            <div class="row">
                @foreach ($comics as $index => $card)
                <div class="col">
                    <a href="{{route('singolCard', ['id' => $index])}}">
                        <x-card-comics :image="$card['thumb']" :title="$card['title']"/>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

