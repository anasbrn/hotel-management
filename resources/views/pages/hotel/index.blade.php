@foreach ($hotels as $hotel)
    
<a href="{{ route('show', ['id' => $hotel->id]) }}">{{ $hotel->name }}</a>

@endforeach