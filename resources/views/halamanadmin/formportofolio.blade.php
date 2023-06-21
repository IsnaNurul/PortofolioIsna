@extends('halamanadmin.admin')

@section('container')
<div class="controller mt-3">
    <div class="card">
    <div class="card-header text-center">
        <h4>My Portofolio</h4>
    </div>
    <div class="card-body">
        {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="" class="form-label">Tittle Porotofolio</label>
                <input type="text" name="tittle" id="tittle" class="form-control{{ $errors->has('tittle') ? ' is-invalid' : '' }}" value="{{ $portofolio->tittle }}" autofocus>
                @if($errors->has('tittle'))
                    <span class="invalid-feedback">{{ $errors->first('tittle') }}</span>
                @endif
            </div>
            <div class="mb-2">
                <label for="" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category" required>
                    <option selected>{{ $portofolio->category }}</option>
                    <option value="Web Aplication">Web Aplication</option>
                    <option value="Game Aplication">Game Aplication</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" required>{{ $portofolio->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image Portofolio</label>
                <br>
                @if (file_exists("storage/".$portofolio->foto))
                    <img src="/storage/{{ $portofolio->foto }}" alt="" width="100" height="100">
                @endif
                <input class="form-control mt-3" name="foto" id="foto" type="file"  value="{{ $portofolio->foto }}">
            </div>
            <div class="mb-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">{{ $tombol }}</button>
            </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection