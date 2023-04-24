@foreach ($hotels as $hotel)
    
<p>{{ $hotel->name }}</p>
<p>{{ $hotel->description }}</p>

@endforeach