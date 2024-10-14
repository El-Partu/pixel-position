<x-layout>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" required/>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD" required/>
        <x-forms.input label="Location" name="location" placeholder="Florida, USA"  required/>
        <x-forms.select label="Schedule" name="schedule" >
            <option class="text-black">Full Time</option>
            <option class="text-black">Part Time</option>
        </x-forms.select>
        <x-forms.input label="Job Url" name="url" type="url" placeholder="https://www.murazik.com/veniam-itaque-omnis-nam-velit-ipsum-dolorem"  required/>
        <x-forms.checkbox label="Feature(Cost Extra)" name="featured" />
        <x-forms.divider/>
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracast,video, education"  required/>
        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
