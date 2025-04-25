@include('layouts.main')

    
    <main class="main">

        <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">Kurikulum</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Kurikulum</li>
                </ul>
            </div>
        </div>
        <div class="container-k">
            <div class="header-k">KURIKULUM</div>
            <div class="table-k">
                <div class="row-k header-row-k">
                    <div class="cell-k">Mata Kuliah</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">SKS</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Dasar Pemrograman</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">3</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Bahasa Inggris I</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Penyelesaian Masalah di Dunia Digital</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Pembentukan Karakter Del</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">2</div>
                </div>
                <div class="row-k">
                    <div class="cell-k">Rekayasa dan Perancangan Perangkat Lunak</div>
                    <div class="cell-k">Semester I</div>
                    <div class="cell-k">3</div>
                </div>
            </div>
        </div>
    </main>
    @include('layouts.footer')