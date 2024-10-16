@props(['job'])

<x-panel class="flex flex-col text-center shadow-xl">
    <div class="flex justify-between mx-1">
        <div class="self-start text-sm">{{ $job->employer->name }}</div>
        {{-- 
        Modal
        
         --}}
        @if ($job->employer->user_id === Auth::user()->id)
            <x-alpine-modal buttonName="Delete">
                <h1 class="">Are you sure you want to delete the job?</h1>
                <div class="flex justify-between w-full px-6 ">
                    <button @click="open = false" class="py-0 px-1">cancel</button>
                    <form method="POST" action="/jobs/{{ $job->id }}">
                        @csrf
                        @method('delete')
                        <button @click="open = false" type="submit" class="text-red-500">continue</button>
                    </form>
                </div>
            </x-alpine-modal>
        @endif


    </div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-800 text-xl"><a href="{{ $job->url }} "
                target="_blank">{{ $job->title }}</a></h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-employer-logo employer_id="{{ $job->employer_id }}" :width="42" />
    </div>


</x-panel>
