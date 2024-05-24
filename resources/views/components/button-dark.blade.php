@props([
    'routeTarget',
    'buttonText'
])

<a 
    {{ $attributes->merge(
        [
            'class' => 'inline-block md:px-5 py-2 px-2 border border-b-4 bg-black text-white
            border-r-4 border-black rounded-md hover:bg-white hover:text-slate-800 transition delay-150',
        ]
    )}}
    href="{{ (isset($routeTarget) ? $routeTarget:'#') }}"
>
    {{ $buttonText }}
</a>