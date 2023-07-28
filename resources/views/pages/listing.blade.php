@extends('layouts.main')
@section('content')

    <section class="listing-container">
        @if ($data)
            @foreach ($data as $item)
                <div class="logo-img">
                    <img src="/images/product.jpeg" alt="">
                </div>
                <div class="listing-display-holder">

                    <div class="listing">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->company }}</p>
                        <span>
                          @foreach (explode(",", $item->tags) as $tag)
                                <p>{{ $tag }}</p>
                            @endforeach
                        </span>
                        <span>{{ $item->description }}</span>
                    </div>
                    <div class="listings-btns">
                        <button><a href="{{ $item->website }}">Visit Website</a></button>
                        <button><a href="mailto:{{ $item->email }}">Send Email</a></button>
                    </div>

                </div>
            @endforeach
        @endif
    </section>

@endsection
