@props(['image', 'caption', 'modern' => false, 'fallback' => null])

@php
    $path = 'images/stonehaven-history/'.$image;
    if (! is_file(public_path($path))) {
        $path = $fallback;
    }
    $dimensions = $path && is_file(public_path($path)) ? getimagesize(public_path($path)) : false;
@endphp

@if ($dimensions)
    <figure {{ $attributes->class(['town-image', 'history-postcard' => ! $modern, 'town-image-modern' => $modern]) }}>
        <img src="{{ asset($path) }}" alt="{{ $caption }}" width="{{ $dimensions[0] }}" height="{{ $dimensions[1] }}" loading="lazy" decoding="async">
        <figcaption>{{ $caption }}</figcaption>
    </figure>
@endif
