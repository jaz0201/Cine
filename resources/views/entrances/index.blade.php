@forelse ($entrances as $entrance)
<li> {{ $entrance->hourEntrance }} > {{ $entrance->room }}</li>
@empty
<h1>No hay datos para mostrar :( </h1>

@endforelse
