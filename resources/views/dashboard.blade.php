<x-layout>
    <main class="container mx-auto p-10">
    
        <h1>Pagina Inicial</h1>
        
        <p>
            Bem-vindo de volta, {{ auth()->user()->name }}!
        </p>

        <br>

        <div class="">
            <h2 class="text-xl mt-4">
                Listagem dos Hábitos
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="pl-4">
                        <div class="flex gap-2 items-center">
                            <p class="font-bold text-xl">
                                - {{ $item->name }}
                            </p>
                            <p>
                                [{{ $item->habitLogs->count() }}]
                            </p>
                        </div>
                    </li>

                 @empty
                    <p>Você ainda não possui hábitos cadastrados.</p>
                @endforelse
            </ul>

            <a href="/habits/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 gap-2 mt-4 inline-block">
                Adicionar Novo Hábito
            </a>
        </div>
        

    </main>
</x-layout>