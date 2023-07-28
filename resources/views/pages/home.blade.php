@extends('layouts.main')
@section('content')
    <x-hero />
    <section class="hero-container">
        @foreach ($data as $item)
            <x-listing-card :item="$item" />
        @endforeach
    </section>
@endsection
