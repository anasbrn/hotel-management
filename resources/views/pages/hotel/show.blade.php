<p>{{ $hotel->name }}</p>
<p>{{ $hotel->description }}</p>
<p>{{ $hotel->city->name }}</p>

<a href="{{ route('reserve', $hotel->id) }}">Reserve</a>