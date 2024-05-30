<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Perfect Car</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>
<body>
<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">BOXCARS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('submit') }}">Submit Listing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="hero-section">
    <div class="container text-center">
        <h1>Find Your Perfect Car</h1>
        <p>Find cars for sale and for rent near you</p>
        <div class="search-box">
            <div class="row">
                <div class="col-md-3">
                    <select class="form-control">
                        <option>Any Makes</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option>Any Models</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-control">
                        <option>Prices: All Prices</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary btn-block">Search Cars</button>
                </div>
            </div>
        </div>

        <div class="featured-model mt-4">
            <p style="margin-top: 100px; margin-bottom: 20px">Or Browse Featured Model</p>
            <button class="btn btn-outline-light">SUV</button>
            <button class="btn btn-outline-light">Sedan</button>
            <button class="btn btn-outline-light">Hatchback</button>
            <button class="btn btn-outline-light">Coupe</button>
            <button class="btn btn-outline-light">Hybrid</button>
        </div>
    </div>
</div>
<section class="brand-section py-5">
    <div class="container text-center">
        <h2>Explore Our Premium Brands</h2>
        <div class="row mt-4 brand-logos">
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="0" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/audi" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b1.jpg" alt="Image">
                            <h3 class="title">Audi</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/bmw" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b2.jpg" alt="Image">
                            <h3 class="title">BMW</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/ford" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b3.jpg" alt="Image">
                            <h3 class="title">Ford</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/mercedes-benz" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b4.jpg" alt="Image">
                            <h3 class="title">Mercedes Benz</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="4" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/peugeot" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b5.jpg" alt="Image">
                            <h3 class="title">Peugeot</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="models" style="width: 229px; margin: 10px;" tabindex="0" data-slick-index="5" aria-hidden="false">
                    <div class="brand-item-style1 d-flex align-items-center justify-content-center">
                        <a href="https://demoapus1.com/boxcar/listing-make/volkswagen" tabindex="0">
                            <img decoding="async" src="https://demoapus1.com/boxcar/wp-content/uploads/2023/10/b6.jpg" alt="Image">
                            <h3 class="title">Volkswagen</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
