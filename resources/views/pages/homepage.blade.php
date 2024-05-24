@extends("layouts.basic-layouts")

@section("title", isset($pageTitle) ? $pageTitle : "Kerkomp")

@section("content")
    <header class="mb-5 p-2 xl:p-5 flex items-center justify-between border-b border-gray-300">
        <h1 class="font-bold md:text-2xl">KerKomp.</h1>
        <div class="inline-block">
            <x-button-dark routeTarget="#" buttonText="Register" class="text-sm md:text-md"/>
            <x-button-dark routeTarget="#" buttonText="Login" class="text-sm md:text-md"/>
        </div>
    </header>
    <div class="container py-32 px-5 mx-auto text-center">
        <h1 class="text-2xl md:text-5xl text-black font-bold">
            KerKomp.
        </h1>

        <p class="text-md md:text-xl">
            Website untuk memanajemen tugas kelompok anda
        </p>

        <x-button-light routeTarget="{{ route('dashboard') }}" 
            class="mx-auto my-5 text-md lg:text-lg px-5 py-2 border-2 rounded-lg"
            buttonText="Get Started"
        />
    </div>
@endsection