@extends('layouts.app')
    <h1>Daftar Mahasiswa</h1>
        <ol>
            @foreach ($data as $mhs)
                <li>
                    Nama : {{ $mhs['nama'] }} <br>
                    NIS : {{ $mhs['nim'] }} <br>
                    Jurusan : {{ $mhs['jurusan'] }}
                </li><br>
            @endforeach
        </ol>
        <div class="CRUD">
            <button>Add Data</button>
        </div><br>
    <button onclick="window.location.href='{{ route('home') }}'">Back.!!</button><br>
    <div>
        Copyright © <?php echo date("Y"); ?> Vish Company
    </div>
