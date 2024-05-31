<!-- Menghubungkan dengan Template Induk/Master -->
@extends('layouts.master')
<!-- Isi bagian judul Halaman -->
@section('judul_halaman', 'Selamat Datang')
<!-- isi Bagian Konten Home -->
@section('konten') <br>
    <p>Halo, Saya adalah seorang Mahasiwa UNINUS Bandung dengan Prodi Teknik
        Informatika<br>
        Saya sedang belajar mengenai Framework :
    </p>
    <ul>
        <li>Laravel</li>
        <li>React</li>
        <li>Astro</li>
        <li>Flutter</li>
    </ul>
@endsection
