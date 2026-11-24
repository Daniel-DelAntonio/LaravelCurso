<x-layout>
    <main class="container mx-auto p-10">
        <h1 class="text-4xl font-bold text-center">
            Editar Hábito
        </h1>
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
            
            <form action="{{ route('habits.update', $habit) }}" method="post" class="flex flex-col gap-4 mt-4">
                @csrf
                @method('PUT')

                <div class="flex flex-col gap-2 mb-4">
                    <label for="name" class="font-bold">
                        Nome do Hábito:
                    </label>
                    <input type="text" name="name" id="name" placeholder="Nome do Hábito" class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">
                    <p>
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </p>
                </div>

                <button type="submit" class="bg-white p-2 border-2 hover:bg-gray-200 cursor-pointer">
                    Cadastrar Hábito
                </button>
            </form>
            
        </section>
    </main>
</x-layout>