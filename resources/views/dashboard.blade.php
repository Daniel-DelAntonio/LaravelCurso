<x-layout>
    <main class="container mx-auto p-10">
    
        <h1 class="text-4xl font-bold text-center">
            Pagina Inicial
        </h1>
        
        <a href="{{ route('habits.create') }}" class="p-2 border-2 bg-white hover:bg-gray-200 font-bold">
            Cadastrar Hábito
        </a>

        @session('success')
            <div class="bg-green-100 border-2 border-green-500 block max-w-[350px] text-green-800 rounded mb-4 p-4 mt-4 ">
                {{ session('success') }}
            </div>
        @endsession

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

                            <a href="{{ route('habits.edit', $item) }}" class="bg-blue-500 text-white p-1 hover:bg-blue-700 cursor-pointer">
                                <x-icons.edit />
                            </a>

                            <form action="{{ route('habits.destroy', $item) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="bg-red-500 text-white p-1 hover:bg-red-700 cursor-pointer">
                                    <x-icons.trash />
                                </button>
                            </form>
                        </div>
                    </li>

                 @empty
                    <p>Você ainda não possui hábitos cadastrados.</p>
                @endforelse
            </ul>

            <a href="{{ route('habits.create') }}" class="bg-white text-black border-2 px-4 py-2 rounded hover:bg-gray-200 gap-2 mt-4 inline-block">
                Adicionar Novo Hábito
            </a>
        </div>
        

    </main>
</x-layout>