@extends('layouts.base')

@section('head-title')
DC Comics 
@endsection

@section('page-content')
    <section id="main-section">
        <div class="container-main">
            @foreach ($comics as $card)
                <x-card-comics :image="$card['thumb']" :title="$card['title']"/>
            @endforeach
        </div>
    </section>
@endsection
