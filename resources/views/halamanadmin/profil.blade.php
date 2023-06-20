@extends('halamanadmin.admin')

@section('container')
<div class="controller mt-3">
    <div class="card">
    <div class="card-header text-center">
        <h4>My Profil</h4>
    </div>
    <div class="card-body">
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $profil->nama_lengkap }}" autofocus required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" required>
                    <option selected>{{ $profil->status }}</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                  </select>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $profil->tempat_lahir }}" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Tanggal lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ date('Y-m-d', strtotime($profil->tgl_lahir)) }}" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Jenis kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                    <option selected>{{ $profil->jenis_kelamin }}</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3" required>{{ $profil->alamat }}</textarea>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Link Instragram</label>
                <input type="text" name="ig" id="ig" class="form-control" value="{{ $profil->ig }}" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Link WhatsApp</label>
                <input type="text" name="wa" id="wa" class="form-control" value="{{ $profil->wa }}" required>
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Link Twitter</label>
                <input type="text" name="twitt" id="twitt" class="form-control" value="{{ $profil->twitt }}" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">About Me</label>
                <textarea class="form-control" name="about" id="about" rows="3" required>{{ $profil->about }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto Profil</label>
                <br>
                @if (file_exists("storage/".$profil->foto_profil))
                    <img src="/storage/{{ $profil->foto_profil }}" alt="" width="100" height="100">
                @endif
                <input class="form-control mt-3" name="foto_profil" id="foto_profil" type="file" value="{{ $profil->foto_profil }}" required>
            </div>
            <div class="mb-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection