@props(['job'])
<x-panel class="gap-x-6 flex">
    <div>
        <x-employer-logo employer_id="{{ $job->employer_id }}" :width="100"/>
     </div>
     <div class=" flex-1 flex flex-col">
         <a href="{{ $job->url }}" class="self-start text-sm text-gray-400 group-hover:text-blue-800 transition-colors duration-300">{{ $job->employer->name }}</a>
         <h3 class="font-bold text-xl mt-4 " >{{ $job->title }}</h3>
         <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>

     </div>
     <div class="">
        @foreach ($job->tags as $tag)
        <x-tag :$tag/>
        @endforeach
     </div>
</x-panel>

