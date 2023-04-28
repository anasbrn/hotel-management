<p>Name: {{ $booking->user->name }}</p>
<p>Hotel: {{ $booking->hotel->name }}</p>
<p>City: {{ $booking->hotel->city->name }}</p>
<p>Total: {{ $booking->room->price_per_night }} DH</p>