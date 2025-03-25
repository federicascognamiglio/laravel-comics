@extends('Layouts.master')

@php
$cards = config("comics")
@endphp

@section('pageContent')
<div class="container p-relative">
    <span class="section-tag">CURRENT SERIES</span>
    <!-- Cards -->
    <section class="card-section">
        <div class="row">
            @foreach( $cards as $card)
            <div class="col">
               <x-card>
                     <x-slot:thumb>{{ $card['thumb'] }}</x-slot>
                     <x-slot:title>{{ $card['title'] }}</x-slot>
               </x-card>
            </div>
            @endforeach
        </div>
        <button class="blue-btn">LOAD MORE</button>
    </section>
    <!-- /Cards -->
</div>
<!-- Banner -->
 <x-banner></x-banner>
<!-- /Banner -->
@endsection