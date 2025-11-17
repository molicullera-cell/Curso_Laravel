@props([
    'type' => 'info',   // info | success | warning | error
])

@php
    $classes = [
        'info'    => 'background: #d9eaff; padding:10px; border-left:4px solid #1d6fdc;',
        'success' => 'background: #d8ffd9; padding:10px; border-left:4px solid #1ddc57;',
        'warning' => 'background: #fff8d9; padding:10px; border-left:4px solid #f0c200;',
        'error'   => 'background: #ffd9d9; padding:10px; border-left:4px solid #dc1d1d;',
    ];
@endphp

<div style="{{ $classes[$type] ?? $classes['info'] }}">
    {{ $slot }}
</div>
