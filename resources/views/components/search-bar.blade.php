<h1 {{ $attributes->merge(['class'=>"text-4xl font-bold"]) }}>Let's find your next job</h1>
<x-forms.form action="/search">
    <x-forms.input type="text" :label="false" name="q" placeholder="Web Developer..." />
</x-forms.form>
