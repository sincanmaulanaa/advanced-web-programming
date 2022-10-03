@extends("dashboard")

@section("content")

@include("components.nav")
<h1>Selamat datang <?= $nama ?>.</h1>
<h2>Waktu: <?= $waktu ?></h2>

@endsection
