@include('layouts.main')
<br><br>
<style>
    .kurikulum-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .semester-column {
        width: 45%;
        margin-bottom: 20px;
        margin-right: 20px;
        background-color: #e6f0ff; /* Latar belakang terang untuk kolom semester */
        border: 1px solid #cdddf2;   /* Border tipis */
        border-radius: 5px;          /* Sedikit membulatkan sudut */
        padding: 10px;
    }

    .semester-header {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 10px;
        color: #1e3a8a;       /* Warna teks biru gelap */
        text-align: center;    /* Judul di tengah */
    }

    .table-k {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px; /* Add margin to the bottom of each table */
        border: 1px solid #cdddf2;
    }

    .row-k {
        display: flex;
    }

    .cell-k {
        border: 1px solid #cdddf2; /* Warna border yang lebih cerah */
        padding: 8px;
        text-align: left;
        flex: 1;
        color: #333;         /* Warna teks abu-abu gelap */
    }

    .header-row-k {
        background-color: #d6e3ff; /* Latar belakang header lebih gelap */
        font-weight: bold;
        color: #1e3a8a; /* Warna teks biru gelap pada header */
    }

.container-k {
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .header-k {
        font-size: 2em;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
    }

/* Styling untuk container-k, header-k dari css eksternal */
/*Pastikan style ini ditambahkan jika belum ada di file css eksternal*/

</style>

<main>

<div class="container-k">
    <div class="site-heading text-center">
    <span class="site-title-tagline"><i class="fas fa-graduation-cap"></i> Kurikulum </span>
    <h2 class="site-title">Kurikulum  <span>D3 Teknologi Informasi</span></h2>
    </div>
    <div class="kurikulum-container">

        <!-- Semester I (Kiri) -->
        <div class="semester-column">
            <div class="semester-header">Semester I</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Dasar Pemrograman</div>
                    <div class="cell-k">3</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Bahasa Inggris I</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Penyelesaian Masalah di Dunia Digital</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Pembentukan Karakter Del</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Rekayasa dan Perancangan Perangkat Lunak</div>
                    <div class="cell-k">3</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Pengenalan Basis Data</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Pengembangan Situs Web</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Arsitektur dan Organisasi Komputer</div>
                    <div class="cell-k">2</div>
                </div>
            </div>
        </div>

        <!-- Semester II (Kanan) -->
        <div class="semester-column">
            <div class="semester-header">Semester II</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Bahasa Inggris II</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Agama</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Algoritma & Struktur Data</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Desain Pengalaman Pengguna</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Sistem Operasi</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Proyek Akhir Tahun I</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Matematika Diskrit</div>
                    <div class="cell-k">3</div>
                </div>
            </div>
        </div>

        <!-- Semester III (Kiri) -->
        <div class="semester-column">
            <div class="semester-header">Semester III</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Probabilitas dan Statistika</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Pemrograman Berorientasi Objek</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Sistem Basis Data</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Pengembangan Aplikasi Mobile</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Skalabilitas & Data Analitik</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Jaringan Komputer</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Teknologi IoT</div>
                    <div class="cell-k">2</div>
                </div>
            </div>
        </div>

        <!-- Semester IV (Kanan) -->
        <div class="semester-column">
            <div class="semester-header">Semester IV</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Bahasa Inggris III</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Pancasila</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Aljabar Linier</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Pengujian dan Kualitas Perangkat Lunak</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Aplikasi Terdistribusi & Layanan Virtual</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Keamanan Perangkat Lunak</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Sistem Komputasi Awan</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Proyek Akhir Tahun II</div>
                    <div class="cell-k">3</div>
                </div>
            </div>
        </div>

        <!-- Semester V (Kiri) -->
            <div class="semester-column">
            <div class="semester-header">Semester V</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Magang</div>
                    <div class="cell-k">20</div>
                </div>
            </div>
        </div>

                <!-- Semester VI (Kanan) -->
                <div class="semester-column">
            <div class="semester-header">Semester VI</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">SKS</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Kewarganegaraan</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Bahasa Indonesia</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Keteknowiraan</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Kecerdasan Buatan</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Tata Kelola Teknologi Informasi</div>
                    <div class="cell-k">3</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Socio - Informatika dan Profesionalisme</div>
                    <div class="cell-k">2</div>
                </div>
                 <div class="row-k">
                    <div class="cell-k">Tugas Akhir</div>
                    <div class="cell-k">6</div>
                </div>
            </div>
        </div>

    </div>
</div>

</main>
@include('layouts.footer')