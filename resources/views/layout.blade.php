<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('judul') | INFO-LOKER </title>
    <link rel="stylesheet" href="/bulma/css/bulma.min.css">
    <style>
        .navbar {
            background-color: transparent;
            color: black;
            padding: 10px;
        }

        .navbar-item {
            font-size: 1.2em;
            font-weight: bold;
            color: white !important;
            margin-right: 15px;
        }

        .navbar-brand .navbar-item {
            font-size: 1.5em;
            color: white !important; /* Warna putih untuk "INFO LOKER" */
        }

        .navbar-burger span {
            background-color: black;
        }

        .navbar-item:hover {
            background-color: #f0f0f0;
            color: black !important;
        }

        .navbar-menu {
            display: flex;
            justify-content: flex-end; /* Menyelaraskan menu ke kanan */
            align-items: center;
            width: auto;
            margin-left: auto; /* Membuat jarak dari sebelah kiri */
        }

        .navbar-brand {
            flex-grow: 0; /* Menonaktifkan pengambilan ruang yang tersedia */
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <b>INFO LOKER</b>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarINFOLOKER">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarINFOLOKER" class="navbar-menu">
            <a class="navbar-item" href="/">Beranda</a>
            <a class="navbar-item" href="/loker">Lowongan Pekerjaan</a>
            <a class="navbar-item" href="/tips-and-tricks">Tips & Trik Melamar Pekerjaan</a>
            <a class="navbar-item" href="/profil">Profil Pembuat</a>
        </div>
    </nav>
    @yield('konten')
</div>
</body>
</html>
