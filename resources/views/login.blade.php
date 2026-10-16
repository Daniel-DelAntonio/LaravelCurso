<x-layout>
    <main class="container mx-auto p-10">
    
        <h1>
            Faça Login
        </h1>

        <section class="mt-4">
            <form action="/login" method="POST">
                @csrf

                @error('email')
                    <p class="text-red-500 text-xl mt-1">
                        {{ $message }}
                    </p>
                @enderror


                <h2>Email</h2>
                <input type="email" name="email" placeholder="your@email.com" class="bg-white p-2 border-2">

                <h2>Password</h2>
                <input type="password" name="password" placeholder="********" class="bg-white p-2 border-2">

                <br class="p-4">

                <button type="submit" class="bg-white p-2 border-2 rounded">Login</button>
            </form>
        </section>
    </main>
</x-layout>