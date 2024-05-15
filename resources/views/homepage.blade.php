@extends("layouts.basic-layouts")

@section("title", isset($pageTitle) ? $pageTitle : "Kerkomp")

@section("content")
    <header class="mb-5 p-2 xl:p-5 flex items-center justify-between border-b border-gray-300">
        <h1 class="font-bold md:text-2xl">KerKomp.</h1>
        <div class="inline-block">
            <a href="#" class="md:py-2 md:px-5 max-sm:text-sm py-2 px-2 bg-black text-white rounded-md">SignUp</a>
            <a href="#" class="md:py-2 md:px-5 max-sm:text-sm py-2 px-2 border border-black rounded-md">Login</a>
        </div>
    </header>
    <div class="container py-32 px-5 mx-auto text-center">
        <h1 class="text-2xl md:text-5xl text-black font-bold">
            KerKomp.
        </h1>

        <p class="text-md md:text-xl">
            Website untuk memanajemen tugas kelompok anda
        </p>

        <a 
            href="{{ route("dashboard") }}" 
            class="inline-block mx-auto my-5 text-md lg:text-lg px-5 py-2 border-2 rounded-lg 
            border-black border-b-4 border-r-4 text-black font-bold hover:text-white hover:bg-black transition delay-150"
        >
            Get Started
        </a>
    </div>
@endsection