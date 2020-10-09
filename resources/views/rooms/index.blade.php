@forelse ($rooms as $room)
<li> {{ $room->chairs }} > {{ $room->location }} > {{ $room->capacity }} </li>
@empty
<h1>No hay salas disponibles :( </h1>

@endforelse