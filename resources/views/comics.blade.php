@extends('Layouts.master')

@php
$cards = config("comics")
@endphp

@section('pageContent')
<!-- Hero -->
<section class="hero-section"></section>
<!-- /Hero -->
<div class="container p-relative">
    <span class="section-tag">CURRENT SERIES</span>
    
    <!-- Cards -->
    <section class="card-section">
        <div class="row">
            @foreach( $cards as $card)
            <div class="col">
                <div class="card">
                    <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                    <h6>{{ $card['title'] }}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <button class="blue-btn">LOAD MORE</button>
    </section>
    <!-- /Cards -->
</div>
@endsection