<h1>
    Welcome to My Laravel App
</h1>

<p>Nome: {{ $name }}</p>

<p>Estudar:</p>
<ul>
    @foreach ($study as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@auth
    <p>Você está logado como {{ Auth::user()->name }}</p>
@endauth

@guest
    <p>Você não está logado.</p>
@endguest