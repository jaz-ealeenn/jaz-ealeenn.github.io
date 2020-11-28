@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-green-400 text-base font-medium text-green-700 bg-green-50 focus:outline-none focus:text-green-800 focus:bg-green-100 focus:border-green-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-black hover:text-black  hover:bg-green-50 hover:border-green-300 focus:outline-none focus:text-black focus:bg-green-50 focus:border-green-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
