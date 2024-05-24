@extends("layouts.dashboard-layouts")

@section("title", "dasboard - home")

@section("menu-content")
  <h1 class="text-2xl font bold">Dashboard</h1>

  <div class="container">
    <p>Nama: {{ $username }}</p>
    <p>Kelas: {{ $kelas }}</p>
  </div>
@endsection