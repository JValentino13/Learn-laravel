@extends('layouts.app')
@section('content')
<body>
    <div class="container text-center">
        <div class="card shadow-lg p-4 rounded-4 mx-auto" style="max-width: 600px">
            <h1 class="fw-bold text-primary mb-3">Komentar</h1>
            <h4 class="text-secondary mb-4">Klik komentar untuk menghapus</h4>
                <ol class="flex-column align-items-center">
                    @foreach ($komen as $komentar)
                        <a onclick="window.location.href='{{ route('hapus', $komentar->id) }}'" class="text-muted text-decoration-none mb-1">{{ $komentar->komentar }}</a><br>
                    @endforeach
                </ol>
            <form class="CRUD" action="{{ route('simpan') }}" method="POST">
                @csrf
                    <input name="komentar" type="text" class="form-control w-50 mx-auto "><br><br>
                    <button class="btn btn-primary btn-lg px-4">Kirimkan Komentar</button>
            </form><br>
            {{--  @if(empty($komentar))
                <div class="alert alert-danger d-inline-block">Isi Komentar</div>
            @endif  --}}
            <button onclick="window.location.href='{{ route('home') }}'" class="btn btn-secondary btn-lg px-2">Balikk.!!</button><br>
        </div>
    </div>
</body>
