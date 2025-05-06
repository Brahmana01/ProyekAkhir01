<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
    <title>Admin - Edit Pengumuman</title>
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
                                <h6 class="text-white text-capitalize ps-3">Edit Pengumuman</h6>
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

                                <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="judul_pengumuman">Judul:</label>
                                        <input type="text" class="form-control" id="judul_pengumuman" name="judul_pengumuman" value="{{ $pengumuman->judul_pengumuman }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar">Gambar:</label>
                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                        @if($pengumuman->gambar)
                                            <img src="{{ asset('storage/pengumuman/' . $pengumuman->gambar) }}" alt="{{ $pengumuman->judul_pengumuman }}" width="100px">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_update_pengumuman">Tanggal Update:</label>
                                        <input type="date" class="form-control" id="tanggal_update_pengumuman" name="tanggal_update_pengumuman" value="{{ $pengumuman->tanggal_update_pengumuman }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan_lengkap_pengumuman">Keterangan:</label>
                                        <textarea class="form-control" id="keterangan_lengkap_pengumuman" name="keterangan_lengkap_pengumuman" rows="5">{{ $pengumuman->keterangan_lengkap_pengumuman }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('admin.pengumuman.index') }}" class="btn btn-secondary">Batal</a>
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