@php
    $classes = "p-4 border-[1px] border-[#313535]  rounded-xl hover:border-blue-800 transition-colors duration-300 group"
@endphp
<div {{ $attributes(['class'=> $classes]) }}>
{{ $slot }}
</div>
