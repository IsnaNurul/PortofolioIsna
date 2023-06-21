@extends('halamanadmin.admin')

{{-- @section('container')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<div id="layoutSidenav_content">
        <div class="container mt-3">
        <div class="text-center mt-3 mb-3">
        </div>
        <div class="card" id="">
            <div class="card-header text-center">
            <h4>My Portofolio</h4>
            </div>
            <div class="card-body">
            <a href="portofolio\add" class="btn btn-primary btn-sm">+ Tambah Data</a>
            </button>
                <div class="table-responsive py-3 text-center justify-content-center">
                    <table class="table table-striped" style="width:100%">
                        <tr>
                            <th>No</th>
                            <th>Tittle</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Foto Portofolio</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($portofolio as $item )
                        <tr>
                            <td class=" pt-5 pb-5">{{ $loop->iteration }}</td>
                            <td class=" pt-5 pb-5">{{ $item->tittle }}</td>
                            <td class=" pt-5 pb-5">{{ $item->category }}</td>
                            <td class=" pt-5 pb-5">{{ $item->description }}</td>
                            <td><img src="/storage/{{ $item->foto }}" alt="" width="100" height="100"></td>
                            <td class="col-4 text-center  pt-5 pb-5">
                                <a href="portofolio/edit/{{ $item->id }}" class="btn btn-success btn-sm">Ubah</a>
                                <a href="portofolio/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection --}}

@section('container')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> 
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="card mb-4 mt-3">
                <div class="card-header">
                    <h5 class="text-center">My Portofolio</h5>
                </div>
                <div class="card-body">
                    <a href="portofolio\add" class="btn btn-primary btn-sm">+ Tambah Data</a>
                    <table id="datatablesSimple" class="table table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Foto</th>
                                <th>Description</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach ($portofolio as $item )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tittle }}</td>
                                <td>{{ $item->category }}</td>
                                <td><img src="/storage/{{ $item->foto }}" alt="" width="100" height="100"></td>
                                <td>{{ $item->description }}</td>
                                <td class="col-4 text-center">
                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="portofolio/edit/{{ $item->id }}" class="btn btn-success btn-sm me-2">Ubah</a><br>
                                        <a href="portofolio/delete/{{ $item->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

@endsection

