@extends('layout')

@section('judul', 'Profil Guwe')

@section('konten')
<style>
    .hero {
        background-color: #1a1a1a; /* Warna gelap untuk hero */
        color: #e0e0e0; /* Warna teks terang */
        padding: 2rem;
        text-align: center;
    }

    .hero .title {
        font-size: 2.5rem;
        color: #e0e0e0;
    }

    .hero .subtitle {
        font-size: 1.5rem;
        color: #e0e0e0;
    }

    .section {
        padding: 2rem 1rem;
        background-color: #333333; /* Background warna gelap untuk section */
        color: #e0e0e0; /* Warna teks terang */
    }

    .box {
        background-color: rgba(0, 0, 0, 0.5); /* Background transparan untuk box */
        padding: 1rem;
        border-radius: 10px;
        text-align: center;
    }

    .image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        border-radius: 10px;
        max-width: 400px; /* Membuat gambar lebih besar */
        background-color: rgba(0, 0, 0, 0.5); /* Background transparan untuk gambar */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(0, 0, 0, 0.5); /* Background transparan untuk table */
        color: #e0e0e0; /* Warna teks terang */
        border-radius: 10px;
    }

    table td {
        padding: 0.5rem 1rem;
        border: 1px solid #555555; /* Border warna lebih terang */
    }

    table td:first-child {
        font-weight: bold;
    }

    table td:nth-child(2) {
        text-align: center;
        font-weight: bold;
    }

    .footer {
        background-color: #1a1a1a; /* Background warna gelap untuk footer */
        color: #e0e0e0; /* Warna teks terang */
        padding: 1rem;
        text-align: center;
        margin-top: 2rem;
    }
</style>

<section class="hero">
    <div class="hero-body">
        <p class="title">Profil Pembuat</p>
        <p class="subtitle">LOKERIN AJA</p>
    </div>
</section>

<section class="section">
    <div class="columns">
        <div class="column is-one-third box">
            <img class="image" src="/images/prof.jpg" alt="Profil">
        </div>
        <div class="column is-half">
            <table class="table is-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Raihan Canggih Panilih</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>22 SI A1</td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>:</td>
                    <td>220101033</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>Sukoharjo</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td>Indonesia</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<footer class="footer">
    <p>&copy; 2024 Profil Pembuat Semua Hak Cipta Dilindungi.</p>
</footer>
@endsection
