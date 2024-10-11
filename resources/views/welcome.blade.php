<x-layout>
    <div class="space-y-12">
<section class="text-center pt-8 space-y-6">
    <h1 class="text-4xl font-bold">Let's find your next job</h1>
    <form action="">
        <input type="text" placeholder="Web Developer..." class="rounded-xl bg-[#313535]  border-[#313535] w-full px-5 py-4 max-w-xl">
    </form>
</section>
        <section class="pt-10">
            <x-section-heading>Feature Jobs</x-section-heading>
                   <div class="grid lg:grid-cols-3 gap-8 mt-6">
                     <x-job-card/>
                     <x-job-card/>
                     <x-job-card/>
                   </div>
         </section>
         <section>
            <x-section-heading>Tags</x-section-heading>
<div class="flex space-x-2 mt-6">
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>
    <x-tag>Frontend</x-tag>

</div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-4">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>

         </section>

    </div>
    </x-layout>
