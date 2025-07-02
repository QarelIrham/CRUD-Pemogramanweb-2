@extends('layouts.app')

@section('content')
<style>
    .table-hover tbody tr:hover {
        background-color: #fef9f2;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        visibility: hidden;
    }

    tr:hover .action-buttons {
        visibility: visible;
    }

    .badge-jurusan {
        font-size: 0.85rem;
        padding: 5px 10px;
        border-radius: 12px;
        background-color: #ffe8cc;
        color: #d35400;
        font-weight: 600;
    }

    .btn-custom {
        padding: 6px 12px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        transition: 0.3s;
        text-decoration: none;
    }

    .edit-btn {
        background-color: #e3f6ff;
        color: #0077b6;
    }

    .edit-btn:hover {
        background-color: #caf0f8;
    }

    .delete-btn {
        background-color: #ffe5e5;
        color: #d90429;
    }

    .delete-btn:hover {
        background-color: #ffb3b3;
    }
</style>

<div class="mt-4 mb-3 d-flex justify-content-between align-items-center">
    <h3 class="fw-bold">🎓 Daftar Mahasiswa</h3>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">+ Tambah Mahasiswa</a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead style="background-color: #fff3e6;">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $index => $mhs)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="fw-semibold">{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td><span class="badge-jurusan">{{ $mhs->jurusan }}</span></td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn-custom edit-btn">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-custom delete-btn">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted">Belum ada data mahasiswa 😴</td>
                </tr>
            @endforelse
        </tbody>
  </table>
</div>

<footer class="text-center mt-5 mb-3 text-muted" style="font-size: 0.9rem;">
   <strong>Qarel Irham Hildry Java</strong> • 22552011073 • &copy; {{ now()->year }}
</footer>

@endsection
