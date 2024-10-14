<x-layout>
    <div class="space-y-12">
        <section class="text-center pt-8 space-y-6">
<x-search-bar/>
        </section>
        <section class="pt-10">
            <x-section-heading>Feature Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job/>
                @endforeach
                </div>
         </section>
         <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex space-x-2 mt-6">
                @foreach ($tags as $tag)
                <x-tag :$tag>{{ $tag }}</x-tag>
                @endforeach


            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-4">
                @foreach($recentJobs as $job)
                <x-job-card-wide :job="$job"/>
                @endforeach
            </div>

         </section>

    </div>
    </x-layout>
