<div id="card{{ $id }}" class="max-w-sm card bg-white border border-gray-200 rounded-lg shadow-sm">
    <a href="{{ $link }}">
        <img class="rounded-t-lg bg-white border-white w-full max-h-[200px]" src="{{ asset($image) }}" alt="{{ $title }}" />
    </a>
    <div class="p-5">
        <a href="{{ $link }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-primary">{{ $title }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
        <a href="{{ $link }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary border border-white hover:border-primary rounded-lg hover:bg-secondary hover:text-primary focus:ring-4 focus:outline-none focus:ring-primary">
            Acessar
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
