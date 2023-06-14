<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ordring systm
    </title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row bg-img">
            <div class="row">
                <nav class="navbar navbar-expand-lg justify-content-end dir='ltr'>
                    <div class="container-fluid">
                      <a class="navbar-brand text-warning" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end d-flix" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item mx-3">
                            <a class="nav-link active text-warning" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav- mx-3">
                            <a class="nav-link text-warning" href="#">Features</a>
                          </li>
                          <li class="nav-item mx-3">
                            <a class="nav-link text-warning" href="#">Pricing</a>
                          </li>
                          <li class="nav-item mx-3">
                            <a class="nav-link text-warning">Disabled</a>
                          </li>
                          @if (Route::has('login'))
                              @auth
                                  <a href="{{'/home'}}" class="nav-link mx-3">home</a>
                                  @else
                                  <a href="{{route('login')}}" class="nav-link text-warning mx-3">Login</a>
                                  @if (Route::has('register'))
                                      <a href="{{route('register')}}" class="nav-link text-warning mx-3">Register</a>
                                  @endif
                              @endauth

                          @else

                          @endif
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>

    </div>

<div class="row my-3 justify-content-between mx-1 p-2">
    <div class="card py-3" style="width: 18rem;">
        <img src="{{asset('img/burger.jpg.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Burgers</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Order</a>
        </div>
      </div><div class="card py-3" style="width: 18rem;">
        <img src="{{asset('img/pizza.jpg.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pizza</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Order</a>
        </div>
      </div><div class="card py-3" style="width: 18rem;">
        <img src="{{asset('img/rice.jpg.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rice</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Order</a>
        </div>
      </div><div class="card py-3" style="width: 18rem;">
        <img src="{{asset('img/bbq.jpg.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">BBQ</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-warning">Order</a>
        </div>
      </div>
</div>
</body>
</html>
