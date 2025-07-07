{{-- resources/views/tips-and-tricks.blade.php --}}
@extends('layout')

@section('judul', 'Tips and Tricks Melamar Pekerjaan')

@section('konten')

<style>
    body {
        background-color: #121212;
        color: #e0e0e0;
        font-family: Arial, sans-serif;
    }
    .hero {
        background-color: #2a2a2a;
        border-radius: 8px;
        color: #e0e0e0;
        padding: 2rem;
    }
    .content {
        background-color: #2a2a2a;
        color: #e0e0e0;
        border-radius: 8px;
        padding: 20px;
        margin-top: 20px;
        line-height: 1.6;
    }
    .section-title {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        color: #ff9800;
    }
    .tip {
        margin-bottom: 1rem;
    }
</style>

<section class="hero">
    <div class="hero-body">
        <p class="title">Tips and Tricks Melamar Pekerjaan</p>
        <p class="subtitle">Panduan dari awal hingga akhir</p>
    </div>
</section>

<section class="section">
    <div class="content">
        <h2 class="section-title">1. Persiapan Awal</h2>
        <div class="tip">
            <h3>Mengenali Diri Sendiri</h3>
            <p>Pahami kelebihan dan kekurangan diri sendiri serta bidang pekerjaan yang diminati.</p>
            <ul>
                <li>Identifikasi keahlian utama dan pengalaman yang relevan.</li>
                <li>Kenali tujuan karir jangka panjang Anda.</li>
                <li>Carilah feedback dari teman atau mentor mengenai kekuatan dan area perbaikan Anda.</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Penelitian Perusahaan</h3>
            <p>Lakukan penelitian tentang perusahaan yang ingin Anda lamar, termasuk visi, misi, dan budaya perusahaan.</p>
            <ul>
                <li>Kunjungi situs web resmi perusahaan.</li>
                <li>Baca ulasan dari karyawan dan mantan karyawan di situs seperti Glassdoor atau Indeed.</li>
                <li>Perhatikan berita terbaru tentang perusahaan tersebut.</li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">2. Membuat CV dan Surat Lamaran</h2>
        <div class="tip">
            <h3>Membuat CV yang Menarik</h3>
            <p>Susun CV dengan rapi, jelas, dan mencantumkan pengalaman kerja serta keahlian yang relevan.</p>
            <ul>
                <li>Gunakan format yang bersih dan profesional.</li>
                <li>Cantumkan informasi kontak yang up-to-date.</li>
                <li>Sertakan ringkasan profil profesional di bagian atas.</li>
                <li>Rincikan pengalaman kerja dengan poin-poin yang jelas.</li>
                <li>Sertakan keahlian yang relevan dan sertifikasi yang Anda miliki.</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Menulis Surat Lamaran yang Efektif</h3>
            <p>Tulis surat lamaran yang singkat namun informatif, menjelaskan mengapa Anda cocok untuk posisi tersebut.</p>
            <ul>
                <li>Mulailah dengan sapaan yang sopan dan langsung ke tujuannya.</li>
                <li>Jelaskan bagaimana pengalaman dan keahlian Anda sesuai dengan posisi yang dilamar.</li>
                <li>Tutup dengan ucapan terima kasih dan ajakan untuk wawancara lebih lanjut.</li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">3. Mengirim Lamaran</h2>
        <div class="tip">
            <h3>Mengirim Lamaran Online</h3>
            <p>Pastikan untuk mengikuti instruksi pengiriman lamaran dengan benar dan mengirim ke alamat email yang tepat.</p>
            <ul>
                <li>Periksa kembali format file yang diminta (PDF, DOCX, dll.).</li>
                <li>Gunakan subjek email yang jelas dan profesional.</li>
                <li>Pastikan semua dokumen terlampir dengan benar.</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Melamar Secara Langsung</h3>
            <p>Jika memungkinkan, serahkan lamaran Anda secara langsung ke perusahaan untuk memberikan kesan yang lebih baik.</p>
            <ul>
                <li>Kenakan pakaian yang rapi dan profesional.</li>
                <li>Sampaikan niat Anda dengan sopan dan percaya diri.</li>
                <li>Bawa beberapa salinan CV dan surat lamaran.</li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">4. Persiapan Wawancara</h2>
        <div class="tip">
            <h3>Mempelajari Pertanyaan Wawancara Umum</h3>
            <p>Latih diri Anda dengan pertanyaan-pertanyaan wawancara yang umum ditanyakan.</p>
            <ul>
                <li>Kenapa Anda tertarik dengan posisi ini?</li>
                <li>Apa kelebihan dan kekurangan Anda?</li>
                <li>Di mana Anda melihat diri Anda dalam 5 tahun ke depan?</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Menyiapkan Jawaban yang Tepat</h3>
            <p>Siapkan jawaban yang jujur dan relevan dengan posisi yang dilamar.</p>
            <ul>
                <li>Berikan contoh konkret dari pengalaman Anda yang menunjukkan keahlian Anda.</li>
                <li>Jelaskan bagaimana Anda bisa memberikan kontribusi bagi perusahaan.</li>
                <li>Latih jawaban Anda di depan cermin atau dengan teman.</li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">5. Saat Wawancara</h2>
        <div class="tip">
            <h3>Bersikap Profesional</h3>
            <p>Datang tepat waktu, berpakaian rapi, dan tunjukkan sikap yang profesional selama wawancara.</p>
            <ul>
                <li>Berbicara dengan jelas dan percaya diri.</li>
                <li>Dengarkan pertanyaan dengan seksama sebelum menjawab.</li>
                <li>Tunjukkan antusiasme dan ketertarikan pada posisi tersebut.</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Bertanya Pada Akhir Wawancara</h3>
            <p>Ajukan pertanyaan yang menunjukkan ketertarikan dan pengetahuan Anda tentang posisi dan perusahaan.</p>
            <ul>
                <li>Apa tantangan terbesar dalam posisi ini?</li>
                <li>Bagaimana budaya kerja di sini?</li>
                <li>Apa langkah selanjutnya dalam proses rekrutmen?</li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">6. Follow-Up</h2>
        <div class="tip">
            <h3>Mengirim Ucapan Terima Kasih</h3>
            <p>Setelah wawancara, kirimkan ucapan terima kasih melalui email sebagai bentuk apresiasi.</p>
            <ul>
                <li>Terima kasih atas waktu dan kesempatan untuk wawancara.</li>
                <li>Perkuat minat Anda pada posisi tersebut.</li>
                <li>Sampaikan bahwa Anda menantikan kabar selanjutnya.</li>
            </ul>
        </div>
        <div class="tip">
            <h3>Menunggu dengan Sabar</h3>
            <p>Bersabar dan menunggu tanggapan dari perusahaan. Jika diperlukan, lakukan follow-up dengan sopan.</p>
            <ul>
                <li>Tunggu setidaknya satu hingga dua minggu sebelum follow-up.</li>
                <li>Follow-up dengan sopan dan tanyakan status aplikasi Anda.</li>
                <li>Hindari terlihat terlalu mendesak atau tidak sabar.</li>
            </ul>
        </div>
    </div>
    <div class="content">
    <div class="content">
    <h2 class="section-title">7. Mempunyai Orang Dalam</h2>
    <div class="tip">
        <h3>Koneksi Itu Penting, Serius!</h3>
        <p>Tahu kenapa punya orang dalam itu penting? Bayangkan kamu lagi antre beli bakso favorit kamu, tapi antrenya panjang banget. Tiba-tiba, teman kamu yang jadi tukang bakso manggil, "Eh, sini aja, aku kasih bakso spesial buat kamu!" Pasti senang kan? Nah, melamar kerja juga gitu. Punya orang dalam itu kayak punya teman tukang bakso, bikin hidup lebih mudah.</p>
    </div>
    <div class="tip">
        <h3>Kenapa harus ada Orang Dalam?</h3>
        <p>Jangan hanya mengandalkan, tapi juga buktikan bahwa kamu memang layak diterima.</p>
        <ul>
            <li>Dengan orang dalam, lamaranmu bisa 'nyelonong' langsung ke meja bos. 🚀</li>
            <li>Orang dalam bisa jadi 'pemandu wisata' yang kasih tahu rahasia-rahasia perusahaan. 🔍</li>
            <li>Koneksi dalam itu seperti punya cheat code di game: langsung ke level interview! 🎮</li>
        </ul>
    </div>
    <div class="tip">
        <h3>Pesan Moral</h3>
        <p>Punya orang dalam itu bukan berarti curang, tapi itu seni berteman. Jadi, jangan lupa perbanyak teman, siapa tahu salah satunya bisa jadi orang dalam kamu. Ingat, dunia itu sempit, yang penting jangan sampai baju kamu juga sempit pas wawancara ya!</p>
    </div>
</div>
<footer style="background-color: #1e1e1e; color: #e0e0e0; text-align: center; padding: 20px; margin-top: 40px; border-top: 1px solid #2a2a2a;">
    <p>&copy; 2024 Info Loker. Semua hak dilindungi undang-undang.</p>
    <p>"Mencari kerja itu seperti mencari jodoh: butuh usaha, doa, dan kadang sedikit bantuan orang dalam!" </p>
    <p>"Ingat, gagal wawancara bukan berarti gagal hidup. Cuma berarti waktunya cari makan gratis di acara job fair!" </p>
    <p>Follow us on <a href="#" style="color: #ff9800;">Twitter</a>, <a href="#" style="color: #ff9800;">Facebook</a>, and <a href="#" style="color: #ff9800;">Instagram</a> for more tips!</p>
</footer>
</section>

@endsection
