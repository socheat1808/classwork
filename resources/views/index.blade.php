@extends('layout.main')

@section('content')

<div class="container py-4">

    <h4 class="fw-bold">Explore Stays</h4>
    <p class="text-muted mb-4">
        Book unique places to stay and things to do.
    </p>

    <div class="row row-cols-1 row-cols-md-4 g-4">

        @foreach($properties as $property)
        <div class="col">

            <a href="{{ route('property.show', $property['id']) }}" 
               class="text-decoration-none text-dark">

                <!-- Image -->
                <img src="{{ $property['image'] }}" 
                     class="w-100 rounded-4 property-img mb-2">

                <!-- Title + Price -->
                <div class="d-flex justify-content-between">
                    <span class="fw-semibold">
                        {{ $property['title'] }}
                    </span>
                    <span class="fw-semibold">
                        {{ $property['price'] }}
                    </span>
                </div>

                <!-- Info -->
                <p class="text-muted small mb-0">
                    4 beds · 1 baths
                </p>

            </a>

        </div>
        @endforeach

    </div>

</div>

@endsection