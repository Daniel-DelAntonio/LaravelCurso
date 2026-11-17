<x-layout>
    <main class="container mx-auto p-10">
    
        <h1>Pagina Inicial</h1>
        
        @auth
            <p>
                Bem-vindo de volta, {{ auth()->user()->name }}!
            </p>
        @endauth

        @guest
            <p>
                Bem-vindo, visitante! Por favor, faça login para acessar o dashboard.
            </p>
        @endguest

    </main>
</x-layout>