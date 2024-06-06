<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banyu | Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/poppins-font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-flex justify-content-center mt-3">
        <nav class="rounded-pill shadow d-flex justify-content-center align-items-center text-center">
            <div class="row gx-5 text-center d-flex justify-content-center align-items-center">
                <a href="{{ route('about-me') }}" class="col-4 navbar-icon">
                    <i class="fa fa-user {{ \Route::currentRouteName() == 'about-me' ? 'icon-active' : '' }}"></i>
                </a>
                <a href="{{ route('home.index') }}" class="col-4 navbar-icon">
                    <i class="fa fa-home {{ \Route::currentRouteName() == 'home.index' ? 'icon-active' : '' }}"></i>
                </a>
                <a href="{{ route('contact') }}" class="col-4 navbar-icon">
                    <i class="fa fa-phone {{ \Route::currentRouteName() == 'contact' ? 'icon-active' : '' }}"></i>
                </a>
            </div>
        </nav>
    </div>
    <header>
        @yield('header')
    </header>
    <main style="padding: 50px 0;">
        @yield('content')
    </main>
    <footer class="mt-5 py-3 pt-5">
        <div class="container">
            <div class="row m-0 gy-4 align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="white p-0 m-0 poppins-light">Contact Me : </p>
                    <h5 class="white p-0 m-0 fw-bold">+62 851-5618-0867</h5>
                </div>
                <div class="col-md-6">
                    <p class="white p-0 m-0 poppins-light">Business Email : </p>
                    <h5 class="text-resize white p-0 m-0 fw-bold">banyubagastaranugroho@gmail.com</h5>
                </div>
            </div>
            <div class="mt-5">
                <h6 class="text-center m-0 py-4">© 2024 | Banyu Bagastara Nugroho</h6>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
