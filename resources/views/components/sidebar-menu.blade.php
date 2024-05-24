@props([
    "routeTarget",
    "content",
    "menuIcon" => null,
])

<li class="hover:bg-slate-200 transition delay-150">
    <a class="p-3 px-5 inline-block w-full" href="{{ route($routeTarget) }}">
        @if ($menuIcon)
            <i class="w-10 md:text-lg text-center fa-solid {{ $menuIcon }}"></i>
        @endif
        <span class="md:pl-5">{{ $content }}</span>
    </a>
</li>