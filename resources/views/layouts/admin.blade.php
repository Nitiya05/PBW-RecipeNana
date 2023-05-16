<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('name')</title>

    <!-- style --> 
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar brand">
            <h1><span class="Recipe NaNa">Recipe Nana</h1>
        </div>

        <div class="sidebar menu">
            <ul>
                <li>
                    <a href=""><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                    <span>Pengguna</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-utensils"></span>
                    <span>Resep</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-tasks"></span>
                    <span>Permintaan</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main content">
        <header>
            <h1>
                <label for="">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="cari disini" />
            </div>

            <div class="user-wrapper">
                <img src="public/image/user1.png" width="30px" height="40px" alt="">
            </div>
                <h4>Admin</h4>
                <small>Ini adalah admin</small>

        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>6</h1>
                        <span>Jumlah pengguna</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>3</h1>
                        <span>Total resep</span>
                    </div>
                    <div>
                        <span class="las la-utensils"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Pesan permintaan</span>
                    </div>
                    <div>
                        <span class="las la-tasks"></span>
                    </div>
                </div>

            </div>

        </main>
    </div>
    
</body>
</html>