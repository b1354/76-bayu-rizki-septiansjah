@extends('layouts.basic-layouts')

@section('content')
  <div class="flex">
    <x-sidebar>
      <x-sidebar-menu content="Dashboard" routeTarget="dashboard" menuIcon="fa-house-user"/>
      <x-sidebar-menu content="Tugas" routeTarget="tugasMenu" menuIcon="fa-print"/>
      <x-sidebar-menu content="Kelompok" routeTarget="kelompokIndex" menuIcon="fa-user-group"/>
      <x-sidebar-menu content="Pengaturan" routeTarget="userSettings" menuIcon="fa-gear"/>
    </x-sidebar>

    <div class="container p-5 ">
        @yield('menu-content')
    </div>
  </div>
@endsection
