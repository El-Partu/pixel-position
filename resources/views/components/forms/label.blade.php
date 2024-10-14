@props(['label','name'])
<div class="flex items-center space-x-2">
<span class="w-2 h-2 bg-white "></span>
<label {{ $attributes->merge(['class' => 'block text-xl font-medium leading-6 ']) }} name="{{ $name }}">{{ $label }}</label>
</div>
