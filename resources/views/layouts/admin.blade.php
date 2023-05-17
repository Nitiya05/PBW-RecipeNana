<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('name')</title>

    <!-- style --> 
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

</head>

<body>
    @yield('sidebar')
    <!-- Navigation -->
< <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="{{ asset('public/image/logoawal.png') }}" alt="Image">
                        </span>
                        <span class="title"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin') }}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('atur-user') }}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('resep') }}">
                        <span class="icon">
                            <ion-icon name="fast-food-outline"></ion-icon>
                        </span>
                        <span class="title">Resep</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('permintaan-user') }}">
                        <span class="icon">
                        <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                        </span>
                        <span class="title">Permintaan</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
        




        @section('content')




        @yield('footer')
        <!-- Script -->
        <script src="assets/js/main.js"></script>

        <!-- ionicons --> 
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>