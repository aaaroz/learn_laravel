<!-- Menghubungkan dengan Template Induk/Master -->
@extends('layouts.master')
<!-- Isi bagian judul Halaman -->
@section('judul_halaman', 'Kontak Saya')
<!-- isi Bagian Konten Kontak -->
@section('konten') <br>
    <div class="form-control">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" onclick='alert("Halo Bang!")'>Send</button>
    </div>
@endsection
