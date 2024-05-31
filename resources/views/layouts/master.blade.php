<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Dinamis di Laravel - UNINUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Awal Bagian Menu Navigasi (NavBar) -->
    <div class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid justify-content-center">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a href="/home" class="nav-link text-light">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/profile" class="nav-link text-light">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link text-light">Contact</a>
                </li> <li class="nav-item">
                    <a href="/tendik" class="nav-link text-light">Tendik table</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Akhir bagian Menu Navigasi (NavBar) -->
    <!-- Judul Halaman -->
    <h2 class="container justify-content-center pt-5"><strong>@yield('judul_halaman')</strong></h2>
    <!-- Bagian Konten/Isi -->
    <div class="container justify-content-center">
        @yield('konten')
    </div>
    <br><br>
    <hr>
    <!-- Bagian Footer -->
    <div class="container justify-content-center">
        <footer class="footer">
            <p>&copy; <a href="#" class="align-content-center">UNINUS -</a> 2023
            </p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>

</html>
