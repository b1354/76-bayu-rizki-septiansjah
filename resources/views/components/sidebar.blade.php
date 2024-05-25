@props([
    'opened' => true
])

<div class="sm:relative fixed w-80 h-screen border-r border-gray-300 bg-white box-border
            {{ ($opened == true) ? '' : 'sm:-ml-80 -ml-80 '}} duration-500" id="sidebar">
    <span class="absolute rounded-tr-full rounded-br-full border border-l-0 border-gray-300 bg-white 
                p-2 text-xl font-bold cursor-pointer -right-9 top-4 hover:bg-slate-200
                transition delay-200 block" 
        id="sidebarToggle">
        <i id="sidebarToggleText" class="{{ ($opened) ? 'rotate-180': ''}} fa-solid fa-angles-left delay-50 duration-500 ease-out"></i>
    </span>
    <div class="mb-5 p-5 inline-block w-full">
        <a href="{{ route('homepage') }}">
            <h1
                class="text-2xl text-center w-fit font-bold p-2 block rounded-md
                mx-auto border-2 border-b-4 border-r-4 border-black">
                KerKomp.
            </h1>
        </a>
        <p class="font-mono my-2 text-center text-sm font-light">Manage Your Task</p>
    </div>
    <div class="inline-block w-full py-5">
        <ul>
            {{ $slot }}
        </ul>
    </div>
</div>


<script>
    document.getElementById('sidebarToggle').addEventListener('click', () => {
        const btnIcon = document.getElementById('sidebarToggleText')
        const sidebar = document.getElementById('sidebar')

        const sidebarInfo = sidebar.getBoundingClientRect();

        console.log(sidebarInfo.width)

        btnIcon.classList.toggle('rotate-180')
        sidebar.classList.toggle('-ml-80')
    })
</script>