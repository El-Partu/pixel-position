@php
    $classes ="max-w-2xl mx-auto space-y-6 "
@endphp

<form {{ $attributes(['class'=>$classes, "method"=>"GET"]) }}>
    @csrf
    @if ($attributes->get("method", "GET") !== "GET")
        @method($attributes->get("method"))
    @endif
    {{ $slot }}
</form>
