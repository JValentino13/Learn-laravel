@extends('layouts.app')
    <h1 class="fw-bold text-primary mb-3">Hii..!!</h1>
    <h3 class="text-secondary mb-4">Berikan komentar Tentang Saya.!!</h3>
    <button class="btn btn-primary btn-lg px-4" onclick="window.location.href='{{ route('komentar') }}'">Berikan Komentar</button>
