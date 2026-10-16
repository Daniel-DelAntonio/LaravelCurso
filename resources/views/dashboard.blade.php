<x-layout>
    <main class="container mx-auto p-10">
    
        <h1>Dashboard</h1>

        @auth
            <p>
                Bem-vindo de volta, {{ auth()->user()->name }}!
            </p>
        @endauth

    </main>
</x-layout>