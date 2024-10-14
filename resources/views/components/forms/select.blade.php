{{-- <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
    <input {{ $attributes->merge(['class' => 'block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6']) }}>
</div> --}}

@props(['label', 'name'])

@php
    $default =[
        "id"=>$name,
        "name"=>$name,
        "class"=>"rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full",
    ]
@endphp

<x-forms.field :$label :$name>
<select {{ $attributes($default) }}>
    {{ $slot }}
</select>
</x-forms.field>
