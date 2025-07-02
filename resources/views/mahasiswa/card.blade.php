@extends('layouts.app')

@section('content')
<style>
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .card {
        background-color: #ffffff;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h4 {
        margin-bottom: 0.5rem;
        color: #2c3e50;
    }

    .card p {
        margin: 0.25rem 0;
        color: #555;
        font-size: 0.95rem;
    }

    .footer {
        text-align: center;
        margin-top: 3rem;
        font-size: 0.9rem;
        color: #aaa;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold text-dark">📇 Card View Mahasiswa</h3>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary">← Kembali</a>
</div>

<div class="card-grid">
    @foreach($mahasiswa as $mhs)
        <div class="card">
            <h4>{{ $mhs->nama }}</h4>
            <p><strong>NIM:</strong> {{ $mhs->nim }}</p>
            <p><strong>Email:</strong> {{ $mhs->email }}</p>
            <p><strong>Jurusan:</strong> {{ $mhs->jurusan }}</p>
        </div>
    @endforeach
</div>

<div class="footer">
    &copy; {{ now()->year }} Qarel Irham Hildry Java - 22552011073
</div>
@endsection
