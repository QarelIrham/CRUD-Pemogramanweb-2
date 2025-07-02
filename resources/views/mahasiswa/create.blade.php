@extends('layouts.app')

@section('content')
    <h2 class="mb-4">Tambah Mahasiswa Baru</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada kesalahan input:<br><br>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

       <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select name="jurusan" id="jurusan" class="form-select" required>
        <option value="">-- Pilih Jurusan --</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknik Industri">Teknik Industri</option>
        <option value="DKV">DKV</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
        <option value="Manajemen Retail">Manajemen Retail</option>
    </select>
</div>


        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
