@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md p-3 shadow-sm border-gray-300 focus:border-indigo-300 ring-offset-2 ring focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
