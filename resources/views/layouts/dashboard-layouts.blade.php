@extends("layouts.basic-layouts")

@section("content")
  <div class="flex">
    <div class="w-50 h-screen border-r border-gray-300">
      <div class="mb-5 p-5 inline-block w-full">
        <a href="{{ route('homepage') }}">
          <h1 class="text-2xl text-center w-fit font-bold p-2 block rounded-md
                    mx-auto border-2 border-b-4 border-r-4 border-black">
            KerKomp.
          </h1>
        </a>
        <p class="font-mono my-2 text-center text-sm font-light">Manage Your Task</p>
      </div>
      <div class="inline-block w-full p-5">
        <ul>
          <li class="p-2">
            <a href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="p-2">
            <a href="{{ route('tugasMenu') }}">Tugas</a>
          </li>
          <li class="p-2">
            <a href="{{ route("kelompokIndex") }}"> Kelompok </a>
          </li>
          <li class="p-2">
            <a href="{{ route("userSettings") }}"> Pengaturan </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container p-5">
      @yield("menu-content")
    </div>
  </div>
@endsection