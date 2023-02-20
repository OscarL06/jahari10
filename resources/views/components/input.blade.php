@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-purple-700 focus:ring-purple-700 rounded-md shadow-sm']) !!}>
