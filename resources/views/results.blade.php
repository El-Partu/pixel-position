<x-layout>
    <div class="space-y-6">
        <x-search-bar class="text-center"/>
        <h3 class="">Search Results</h3>
    </div>

    @if (count($jobs))
    <div class="mt-6 space-y-4">
        @foreach($jobs as $job)
        <x-job-card-wide :job="$job"/>
        @endforeach
    </div>
    @else
    <div class="w-full text-center mt-40 text-white/50">
        <h1>No search result found...</h1>
    </div>
    @endif


</x-layout>
