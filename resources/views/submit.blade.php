<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Listing</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
</head>
<body>
<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" >
            <a class="navbar-brand" href="#">BOXCARS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Listings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ route('submit') }}">Submit Listing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="d-flex" >
    <nav class="sidebar bg-dark">
        <ul class="nav flex-column" style="margin-top: 50px">
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">My Listings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">My Favorite</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">My Packages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Submit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Change Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="content p-4"  style="margin-top: 50px">
        <div class="container">
            <h2>Add New Listing</h2>
            <form method="POST" action="{{ route('submit') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="listingTitle" style="margin-top: 10px">Listing Title *</label>
                            <input type="text" class="form-control" id="listingTitle" name="listingTitle" placeholder="Listing Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tagline">Tagline</label>
                            <input type="text" class="form-control" id="tagline" name="tagline" placeholder="Tagline">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="label">Label</label>
                            <input type="text" class="form-control" id="label" name="label" placeholder="Label">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="condition">Condition</label>
                            <select class="form-control" id="condition" name="condition">
                                <option value="">Select Condition</option>
                                <option value="new">New</option>
                                <option value="used">Used</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="make">Make</label>
                            <select class="form-control" id="make" name="make">
                                <option value="">Select Make</option>
                                <option value="audi">Audi</option>
                                <option value="bmw">BMW</option>
                                <!-- Add other makes here -->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" id="year" name="year" placeholder="Year">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="driveType">Drive Type</label>
                            <select class="form-control" id="driveType" name="driveType">
                                <option value="">Select Drive Type</option>
                                <option value="fwd">FWD</option>
                                <option value="rwd">RWD</option>
                                <option value="awd">AWD</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="transmission">Transmission</label>
                            <select class="form-control" id="transmission" name="transmission">
                                <option value="">Select Transmission</option>
                                <option value="automatic">Automatic</option>
                                <option value="manual">Manual</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fuelType">Fuel Type</label>
                            <select class="form-control" id="fuelType" name="fuelType">
                                <option value="">Select Fuel Type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mileage">Mileage</label>
                            <input type="text" class="form-control" id="mileage" name="mileage" placeholder="Mileage">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="engineSize">Engine Size</label>
                            <input type="text" class="form-control" id="engineSize" name="engineSize" placeholder="Engine Size">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cylinder">Cylinder</label>
                            <input type="text" class="form-control" id="cylinder" name="cylinder" placeholder="Cylinder">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Color">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="door">Door</label>
                            <input type="text" class="form-control" id="door" name="door" placeholder="Door">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="vin">VIN</label>
                            <input type="text" class="form-control" id="vin" name="vin" placeholder="VIN">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Listing Description *</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Listing Description"></textarea>
                        </div>
                    </div>
                </div>

                <h3>Features</h3>
                <div class="row">
                    <div class="col-md-3">
                        <h4>Interior</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="airConditioner">
                            <label class="form-check-label" for="airConditioner">
                                Air Conditioner
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Digital Odometer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Heater
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Leather Seats
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Panaromic Moonroof
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Tachometer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="digitalOdometer">
                            <label class="form-check-label" for="digitalOdometer">
                                Touchscreen Display
                            </label>
                        </div>
                        <!-- Add more features as needed -->
                    </div>
                    <div class="col-md-3">
                        <h4>Safety</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="antiLockBraking">
                            <label class="form-check-label" for="antiLockBraking">
                                Anti-lock Braking
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Brake Assist
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Child Safety Locks
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Driver Air Bag
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Power Door Locks
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Stability Control
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="brakeAssist">
                            <label class="form-check-label" for="brakeAssist">
                                Traction Control
                            </label>
                        </div>
                        <!-- Add more features as needed -->
                    </div>
                    <div class="col-md-3">
                        <h4>Exterior</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fogLightsFront">
                            <label class="form-check-label" for="fogLightsFront">
                                Fog Lights Front
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rainSensingWiper">
                            <label class="form-check-label" for="rainSensingWiper">
                                Rain Sensing Wiper
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rainSensingWiper">
                            <label class="form-check-label" for="rainSensingWiper">
                                Rear Spoiler
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rainSensingWiper">
                            <label class="form-check-label" for="rainSensingWiper">
                                Windows - Electric
                            </label>
                        </div>
                        <!-- Add more features as needed -->
                    </div>
                    <div class="col-md-3">
                        <h4>Comfort & Convenience</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="androidAuto">
                            <label class="form-check-label" for="androidAuto">
                                Android Auto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="appleCarPlay">
                            <label class="form-check-label" for="appleCarPlay">
                                Apple CarPlay
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="appleCarPlay">
                            <label class="form-check-label" for="appleCarPlay">
                                Bluetooth
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="appleCarPlay">
                            <label class="form-check-label" for="appleCarPlay">
                                HomeLink
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="appleCarPlay">
                            <label class="form-check-label" for="appleCarPlay">
                                Power Steering
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="appleCarPlay">
                            <label class="form-check-label" for="appleCarPlay">
                                Vanity Mirror
                            </label>
                        </div>
                        <!-- Add more features as needed -->
                    </div>
                </div>

                <h3>Media</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="featuredImage">Featured Image</label>
                            <input type="file" class="form-control-file" id="featuredImage">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="galleryImages">Gallery</label>
                            <div id="galleryContainer">
                                <input type="file" class="form-control-file mb-2" name="galleryImages[]">
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="addGalleryInput()">Add More Images</button>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function addGalleryInput() {
        const container = document.getElementById('galleryContainer');
        const input = document.createElement('input');
        input.type = 'file';
        input.className = 'form-control-file mb-2';
        input.name = 'galleryImages[]';
        container.appendChild(input);
    }
</script>
</body>
</html>
