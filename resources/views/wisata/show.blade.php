@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mb-4 shadow">
        <img src="{{ asset('assets/images/' . $wisata->gambar) }}" class="card-img-top" alt="{{ $wisata->nama }}">
        <div class="card-body">
            <h3 class="card-title text-primary">{{ $wisata->nama }}</h3>
            <p class="card-text">{{ $wisata->deskripsi }}</p>
            <p><strong>Lokasi:</strong> {{ $wisata->lokasi }}</p>
            <p><strong>Harga Tiket:</strong> Rp{{ number_format($wisata->harga_tiket, 0, ',', '.') }}</p>
            <a href="{{ route('wisata.index') }}" class="btn btn-outline-secondary mt-3">← Kembali ke daftar</a>
        </div>
    </div>
</div>
@endsection