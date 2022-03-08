@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-300 hover:text-white focus:bg-gray-300';
    if($active) $classes .= ' bg-blue-300 text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes])}}>
    {{$slot}}
</a>
