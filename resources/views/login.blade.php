<x-layout>
    <main class="container mx-auto p-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6 border-2 mt-4">
    
            <h1 class="font-bold text-3xl">
                Faça Login
            </h1>

            <p>
                Insira seus dados para fazer login
            </p>
        
            <form action="{{ route('auth.login') }}" method="POST" class="flex flex-col gap-4 mt-4">
                @csrf


                <div class="flex flex-col gap-2 mb-4">
                    <label for="email" class="font-bold">Email</label>
                    <input type="email" name="email" id="email" placeholder="your@email.com" class="bg-white p-2 border-2 @error('email') border-red-500 @enderror">

                    <p>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </p>
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password" class="font-bold">Senha</label>
                    <input type="password" name="password" id="password" placeholder="********" class="bg-white p-2 border-2 @error('password') border-red-500 @enderror">
                    <p>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </p>
                </div>

                <button type="submit" class="bg-white p-2 border-2 rounded">Login</button>
            </form>

            <p class="text-center mt-4">
                Não tem uma conta? <a href="{{ route('site.register') }}" class="underline hover:opacity-50 transition">Cadastre-se</a>
            </p>

        </section>
    </main>
</x-layout>