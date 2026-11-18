<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dapur Modern')</title>
    <style>
        /* Reset dasar agar tampilan rapi */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #111;
        }

        /* Header Dibuat Tetap di Atas (Sticky/Fixed) */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000; /* Memastikan header selalu berada di atas elemen lain */
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            padding: 15px 40px;
            border-bottom: 1px solid #d4d4d4;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .brand {
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 0.5px;
            color: #111;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s;
        }

        nav ul li a:hover {
            color: #000;
            text-decoration: underline;
        }

        /* Area Konten Utama diberi jarak atas agar tidak tertutup header fixed */
        main {
            margin-top: 70px; /* Sesuaikan dengan tinggi header */
            padding: 30px 40px;
        }
    </style>
</head>
<body>

    <header>
        <div class="brand">DAPUR MODERN</div>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/katalog">Katalog Menu</a></li>
                <li><a href="/pesanan">Pemesanan</a></li>
                <li><a href="/checkout">Checkout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>