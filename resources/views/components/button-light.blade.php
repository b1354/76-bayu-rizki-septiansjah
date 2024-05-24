@props([
    'routeTarget',
    'buttonText'
])

<a  
    {{ $attributes->merge(
        [
            'class' => 'inline-block md:px-5 py-2 px-2 border border-b-4 
            border-r-4 border-black rounded-md hover:bg-black hover:text-slate-100 transition delay-150',
        ]
    )}}

    href="{{ (isset($routeTarget)) ? $routeTarget:'#' }}" 
>
    {{ $buttonText }}
</a>