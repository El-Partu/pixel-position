<x-layout>
    <x-page-heading>Login</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" required/>
        <x-forms.input label="Password" name="password" type="password" required/>
        <x-forms.button>Login</x-forms.button>
        <div class="space-x-2">
            <span>Don't have an account?</span>
            <x-nav-link href="/register">Register</x-nav-link>
        </div>
    </x-forms.form>
</x-layout>
