<nav class="navbar navbar-light bg-white border-bottom">
    <div class="container d-flex justify-content-between">

        <a class="navbar-brand fw-bold text-danger" href="/">
            LaraBnb
        </a>

        <div>
            <a href="{{ route('home') }}" class="me-3 text-dark text-decoration-none">Home</a>
            <a href="{{ route('property.show', 1) }}" class="btn btn-danger btn-sm">Detail Page</a>
        </div>

    </div>
</nav>