@extends('layouts.app')

@section('content')
    <h2 class="mb-4 text-center fw-bold">Tempat Wisata Populer di Indonesia</h2>

    <div class="row">
        @forelse($wisatas as $w)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ $w['gambar'] }}" class="card-img-top" alt="{{ $w['nama'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $w['nama'] }}</h5>
                        <p class="card-text">{{ Str::limit($w['deskripsi'], 100) }}</p>
                        <a href="{{ $w['link'] }}" target="_blank" class="btn btn-outline-primary mt-auto">Lihat di Wikipedia</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Belum ada data tempat wisata.</p>
        @endforelse
    </div>
@endsection