@extends('layouts.app')
    <h1>Komentar</h1>
    <h4>Klik komentar untuk menghapus</h4>
    <ol>
        @foreach ($komen as $komentar)

            <a onclick="window.location.href='{{ route('hapus', $komentar->id) }}'">{{ $komentar->komentar }}</a><br>
        @endforeach
    </ol>
    <form class="CRUD" action="{{ route('simpan') }}" method="POST">
    @csrf
            <input name="komentar" type="text"><br><br>
            <button>Kirimkan Komentar</button>
        </form><br>
    <button onclick="window.location.href='{{ route('home') }}'">Balikk.!!</button><br>
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif
