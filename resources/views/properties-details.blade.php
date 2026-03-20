@extends('layout.main')

@section('content')

<div class="container py-4">

    <!-- Title -->
    <h2 class="fw-bold">{{ $property->title }}</h2>

    <p class="text-muted mb-3">
        📍 {{ $property->location }} · ⭐ New Listing · 👤 Hosted by Test User
    </p>

    <!-- Image Gallery -->
    <div class="row g-2 mb-4">

        <!-- Main Image -->
        <div class="col-md-6">
            <img src="https://picsum.photos/800/500"
                 class="img-fluid rounded-4 w-100 h-100 object-fit-cover">
        </div>

        <!-- Small Images -->
        <div class="col-md-6">
            <div class="row g-2">

                <div class="col-6">
                    <img src="https://picsum.photos/400/250?1"
                         class="img-fluid rounded-4">
                </div>

                <div class="col-6">
                    <img src="https://picsum.photos/400/250?2"
                         class="img-fluid rounded-4">
                </div>

                <div class="col-6">
                    <img src="https://picsum.photos/400/250?3"
                         class="img-fluid rounded-4">
                </div>

                <div class="col-6">
                    <img src="https://picsum.photos/400/250?4"
                         class="img-fluid rounded-4">
                </div>

            </div>
        </div>

    </div>

    <!-- Content -->
    <div class="row">

        <!-- LEFT -->
        <div class="col-md-8">

            <h5 class="fw-bold mb-3">About this space</h5>

            <p class="text-muted">
                🛁 {{ $property->bathrooms }} Bathrooms
            </p>

            <p class="text-muted">
                {{ $property->description }}
            </p>

        </div>

        <!-- RIGHT BOOKING CARD -->
        <div class="col-md-4">

            <div class="card border-0 shadow rounded-4 p-3">

                <h5 class="fw-bold mb-3">
                     ${{ $property->price }}<span class="text-muted fs-6">/ night</span>
                </h5>

                <!-- Dates -->
                <div class="mb-3">
                    <label class="form-label small">CHECK-IN</label>
                    <input type="date" class="form-control mb-2">

                    <label class="form-label small">CHECK-OUT</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Button -->
                <button class="btn btn-danger w-100 rounded-3">
                    Reserve Now
                </button>

                <p class="text-center text-muted small mt-2">
                    You won't be charged yet
                </p>

            </div>

        </div>

    </div>

</div>

@endsection