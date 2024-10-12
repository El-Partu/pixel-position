@props(['job'])

<x-panel class="flex flex-col text-center shadow-xl">

    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl"><a href="{{ $job->url }} " target="_blank">{{ $job->title }}</a></h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="">
            @foreach ($job->tags as $tag)
            <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo employer_id="{{ $job->employer_id }}" :width="42"/>
    </div>


</x-panel>

