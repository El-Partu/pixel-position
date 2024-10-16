@props(['buttonName', 'customizeModal'=>' '])
@php
    if($customizeModal === Null || $customizeModal === " "){ 
        $default = "ring-1 w-[35%] h-[25%] rounded flex flex-col justify-between py-2 ";
    }else{
        $default = $customizeModal;
    }
@endphp

<div x-data="{ open: false }" >
    <div x-show="open" class="z-50 fixed top-0 w-full h-screen  left-0 bottom-0 flex justify-center items-center bg-black/10 inset-0 " :class="{'hidden':!open}">
        <div {{ $attributes(["class"=>$default]) }}>
            {{ $slot }}
        </div>
    </div>
    <button @click="open = !open"  class="rounded ring-1 text-white bg-red-500/60 px-1 text-sm ">{{ $buttonName }}</button>
</div>