@props(['label','name'])

<div>
    @if ($label)
        <x-forms.label :$name :$label/>
    @endif
    <div class="mt-1">
        {{ $slot }}
    </div>
    <x-forms.error name="{{ $name }}"/>
</div>
