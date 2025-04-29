@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Selamat Datang di <span class="text-primary">ExploreNesia</span></h1>
        <p class="lead">Temukan destinasi wisata terbaik di seluruh Indonesia!</p>
        <a href="{{ route('wisata.index') }}" class="btn btn-primary mt-3">Jelajahi Sekarang</a>
    </div>
</div>
@endsection
