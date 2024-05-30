<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="#">Submit Listing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="login-section hero-section d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log in</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label class="form-check-label" for="loginEmail">Username or Email</label>
                                        <input type="email" class="form-control" id="loginEmail" placeholder="Username or Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-check-label" for="loginPassword">Password</label>
                                        <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Keep me signed in</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    <a href="#" class="d-block text-center mt-2">Lost Your Password?</a>
                                </form>
                                <div class="social-login text-center mt-4">
                                    <p>OR</p>
                                    <button class="btn btn-outline-primary btn-block mb-2">Login with Facebook</button>
                                    <button class="btn btn-outline-danger btn-block">Login with Google</button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="registerUsername">Username</label>
                                        <input type="text" class="form-control" id="registerUsername" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="registerEmail">Email</label>
                                        <input type="email" class="form-control" id="registerEmail" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="registerPassword">Password</label>
                                        <input type="password" class="form-control" id="registerPassword" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
