@props([
    'type' => 'button',
    'variant' => 'primary',
    'class' => '',
])

@php
    $baseClasses = 'px-3 py-1 rounded font-semibold transition-colors duration-200';
    
    $variantClasses = match($variant) {
        'primary' => 'bg-blue-500 text-white hover:bg-blue-600',
        'success' => 'bg-green-500 text-white hover:bg-green-600',
        'danger' => 'bg-red-500 text-white hover:bg-red-600',
        'secondary' => 'bg-gray-500 text-white hover:bg-gray-600',
        'primary-text' => 'text-blue-500 hover:text-blue-600 hover:underline',
        'success-text' => 'text-green-500 hover:text-green-600 hover:underline',
        'danger-text' => 'text-red-500 hover:text-red-600 hover:underline',
        default => 'bg-gray-400 text-white hover:bg-gray-500',
    };
@endphp

<button type="{{ $type }}" class="{{ $baseClasses }} {{ $variantClasses }} {{ $class }}">
    {{ $slot }}
</button>