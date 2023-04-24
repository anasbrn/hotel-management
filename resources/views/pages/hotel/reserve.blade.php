<h1>{{ $hotel->name }}</h1>

<form action="">
    @csrf
    <label for="check_in_date">Check in date</label>
    <input type="datetime-local" id="check_in_date">
    
    <label for="check_out_date">Check out date</label>
    <input type="datetime-local" id="check_out_date">
    
    <select name="room_type" id="room_type">
        <option value="">Double</option>
        <option value="">Single</option>
    </select>

    <button type="submit">Reserve</button>
</form>

