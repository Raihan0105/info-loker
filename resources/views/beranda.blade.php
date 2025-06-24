@extends('layout') 

@section('judul', 'Selamat Datang') 

@section('konten') 

<!-- Bagian Hero -->
<section class="hero is-primary is-bold" style="background: none; padding: 2rem 0;">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered" style="font-size: 3rem; color: #ffffff;">
        Selamat datang
      </h1>
      <h2 class="subtitle has-text-centered" style="font-size: 2rem; color: #b3b3b3;">
        Info Loker - Yang Butuh Butuh Aja
      </h2>
    </div>
  </div>
</section>


<!-- Bagian Menu -->
<section class="section">
  <div class="container">
    <div class="columns">
      <!-- Lowongan Tersedia -->
      <div class="column is-half">
        <div class="card">
          <div class="card-image">
            <figure class="image is-3by2">
              <img class="image" src="/images/antri.jpg" alt="Lowongan Tersedia">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <span class="icon">
                  <i class="fas fa-briefcase"></i>
                </span>
              </div>
              <div class="media-content">
                <p class="title is-4">
                  <a href="{{ url('/loker') }}">Lowongan Tersedia</a>
                </p>
              </div>
            </div>
            <div class="content">
              <p class="has-text-centered has-text-weight-bold">Temukan peluang karir terbaru yang sesuai dengan keahlian Anda. Jangan lewatkan kesempatan emas ini!</p>
              <p>Dapatkan info lowongan pekerjaan terbaru dan terupdate.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Kategori Lowongan -->
      <div class="column is-half">
        <div class="card">
          <div class="card-image">
            <figure class="image is-3by2">
              <img class="image" src="/images/info.jpg" alt="Kategori Lowongan">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-left">
                <span class="icon">
                  <i class="fas fa-tags"></i>
                </span>
              </div>
              <div class="media-content">
                <p class="title is-4">
                  <a href="{{ url('/tips-and-tricks') }}">Tips And Trick</a>
                </p>
              </div>
            </div>
            <div class="content">
              <p class="has-text-centered has-text-weight-bold">Memberikan tips and trik dalam melamar pekerjaan supaya anda tidak kena mental saat melamar pekerjaan</p>
              <p>Jangan gugup jangan bimbang, ada tips ini bikin anda semakin tenang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bagian Footer -->
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Info Loker</strong> oleh <a href="#">Tim Lokerin Aja</a>. Dibangun dengan <a href="#">Cinta Dan Kasih Sayang</a>.
    </p>
    <p>&copy; 2024 Info Loker. Semua hak dilindungi undang-undang.</p>
    <p>"Mencari kerja itu seperti main game: kadang harus ulang level berkali-kali sampai bos terakhir menyerah!" </p>
    <p>"Ingat, hidup itu ibarat lamaran kerja: jangan takut ditolak, karena di luar sana masih banyak perusahaan yang butuh orang keren seperti kamu!" </p>
    <p>"Kalau interview ditanya kelemahanmu apa, jawab saja 'chocolate cake', biar perekrut tahu kelemahanmu memang manis!" </p>
    <p>Follow us on <a href="#" style="color: #ff9800;">Twitter</a>, <a href="#" style="color: #ff9800;">Facebook</a>, and <a href="#" style="color: #ff9800;">Instagram</a> for more tips and laughs!</p>
      </a>
    </p>
  </div>
</footer>

@endsection
