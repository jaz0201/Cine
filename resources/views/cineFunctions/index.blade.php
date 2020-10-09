@forelse ($cineFunctions as $cineFunction)
<li> {{ $cineFunction->start }} > {{ $cineFunction->end }} > {{ $cineFunction->available }} > {{ $cineFunction->level }} </li>
@empty
<h1>No hay funciones disponibles :( </h1>

@endforelse