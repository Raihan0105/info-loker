@extends('layout')

@section('judul', 'Loker')

@section('konten')
<style>
    .hero {
        background: transparent;
        color: white;
        padding: 2rem;
        text-align: center;
    }

    .hero .title, .hero .subtitle {
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    .section {
        padding: 2rem 1rem;
        background-color: transparent; /* Background transparan untuk section */
    }

    .card {
        display: flex;
        flex-direction: column;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: rgba(0, 0, 0, 0.8); /* Background hitam transparan */
        color: #fff;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }

    .card-content {
        padding: 1.5rem;
    }

    .card-header {
        display: flex;
        align-items: center;
        padding: 1rem;
        background-color: rgba(0, 0, 0, 0.8); /* Background hitam transparan untuk header */
    }

    .card-header img {
        width: 50px;
        height: 50px;
        object-fit: contain; /* Diubah dari cover menjadi contain */
        border-radius: 50%;
        margin-right: 1rem;
    }

    .card-header h2 {
        margin: 0;
        font-size: 1.5rem;
    }

    .card-content h2 {
        margin-bottom: 0.5rem;
        font-size: 1.5rem;
        color: #fff;
    }

    .card-content i {
        font-size: 1rem;
        color: #ccc;
    }

    .card-footer {
        background-color: rgba(0, 0, 0, 0.8); /* Background hitam transparan untuk footer */
        padding: 0.5rem 1rem;
        text-align: right;
    }

    .card-footer-item {
        color: #00d1b2;
        font-weight: bold;
    }

    .card-footer-item:hover {
        text-decoration: underline;
    }
</style>

<section class="hero">
    <div class="hero-body">
        <p class="title">DAFTAR LOWONGAN PEKERJAAN YANG TERSEDIA</p>
        <p class="subtitle">Anda Nganggur? Yaudah Sih Sama</p>
    </div>
</section>

<section class="section">
    @foreach ($data as $item)
        <div class="card">
            <div class="card-header">
                <img src="{{ asset('storage/' . $item->logo_perusahaan) }}" alt="Logo Perusahaan">
                <h2>{{ $item->judul }}</h2>
            </div>
            <div class="card-content">
                <div class="content">
                    <p><strong>Nama Perusahaan:</strong> {{ $item->perusahaan }}</p>
                    <i>Kategori: {{ $item->kategori->nama_kategori }}</i>
                </div>
            </div>
            <footer class="card-footer">
                <a href="/loker/{{ $item->id }}" class="card-footer-item">Selengkapnya</a>
            </footer>
        </div>
    @endforeach
</section>
@endsection
