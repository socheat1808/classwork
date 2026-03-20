<div class="col-md-4">
    <div class="card mb-4">
        <img src="{{ $image }}" class="card-img-top" alt="property">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $price }}</p>

            <a href="{{ route('property.show', $id) }}" class="btn btn-primary">
                View Details
            </a>
        </div>
    </div>
</div>
