@extends('layout')

@section('judul', $data->judul)

@section('konten')

<style>
    body {
        background-color: #121212;
        color: #e0e0e0;
        font-family: Arial, sans-serif;
    }
    .hero {
        background-color: #1e1e1e;
        color: #e0e0e0;
    }
    .hero-body {
        padding: 2rem;
    }
    .card {
        background-color: #2a2a2a;
        color: #e0e0e0;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }
    .card-content {
        padding: 20px;
    }
    .content {
        line-height: 1.6;
    }
    .title, .subtitle {
        color: #e0e0e0;
    }
    .apply-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .apply-button a {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .apply-button a:hover {
        background-color: #45a049;
    }
</style>

<section class="hero is-dark">
    <div class="hero-body">
        <p class="title">{{ $data->judul }}</p>
        <p class="subtitle">Kategori: {{ $data->kategori->nama_kategori }}</p>
    </div>
</section>

<section class="section">
    <div class="card">
        <div class="card-content">
            <div class="content">
                {!! nl2br(e($data->deskripsi)) !!}
            </div>
        </div>
    </div>
    <div class="contact-card">
        <h2>Contact Person</h2>
        <p>Nama Perusahaan: {{ $data->perusahaan }}</p>
        <p>Email Perusahaan: {{ $data->email }}</p>
    </div>
</section>

@endsection
