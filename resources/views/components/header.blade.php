{{--Cabeçalho--}}
<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div>
        {{ config('app.name') }}
    </div>

    @auth
        <a href="/logout" class="bg-white p-2 border-2">Logout</a>
    @endauth

    @guest
        <a href="/login" class="bg-white p-2 border-2">Login</a>
    @endguest


</header>