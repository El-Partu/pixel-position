@props(['tag','size'=>'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 transition-colors duration-300  rounded-xl";

    if($size === 'base'){
        $classes .=" px-5 py-1 text-sm";
    }
    if($size="small"){
        $classes .= " px-2 py-1 text-2xs";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name)}}" {{ $attributes([ 'class'=>$classes]) }}>{{ $tag->name}}</a>
