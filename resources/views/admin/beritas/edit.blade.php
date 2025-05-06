<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
    <title>Admin - Edit Berita</title>
</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('admin.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Edit Berita</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('admin.beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="judul">Judul:</label>
                                        <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="topik">Topik:</label>
                                        <input type="text" class="form-control" id="topik" name="topik" value="{{ $berita->topik }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_singkat">Deskripsi Singkat:</label>
                                        <textarea class="form-control" id="deskripsi_singkat" name="deskripsi_singkat" rows="3" required>{{ $berita->deskripsi_singkat }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar:</label>
                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                        <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" width="100">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan:</label>
                                        <textarea class="form-control" id="keterangan" name="keterangan" rows="5" required>{{ $berita->keterangan }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_update">Tanggal Update:</label>
                                        <input type="date" class="form-control" id="tanggal_update" name="tanggal_update" value="{{ $berita->tanggal_update }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.beritas.index') }}" class="btn btn-secondary">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>
        <!--   Core JS Files   -->
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('admin/assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
</body>

</html>