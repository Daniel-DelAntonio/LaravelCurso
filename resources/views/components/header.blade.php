{{--Cabeçalho--}}
<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div>
        {{ config('app.name') }}
    </div>

    <div>
    
    @auth
    <form action="{{ route('auth.logout') }}" method="POST">
        @csrf
        <button type="submit" class="bg-white p-2 border-2 hover:bg-gray-200 cursor-pointer">
            Logout
        </button>

    </form>
    @endauth


    @guest
        <a href="{{ route('site.login') }}" class="bg-white p-2 border-2 hover:bg-gray-200">Login</a>
    @endguest

    </div>
</header>