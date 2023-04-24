@foreach ($hotels as $hotel)
    
<a href="{{ route('show', $hotel->id) }}">{{ $hotel->name }}</a>

@endforeach