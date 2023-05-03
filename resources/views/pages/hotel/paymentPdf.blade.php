<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Receipt Payment</h1>
    <hr>
    <div class="d-flex justify-content-between">
        <div>
            <p class="text-light">Payment Date</p>
            <p class="text-light">{{ $booking->created_at }}</p>
        </div>
        <div>
            <p class="text-light">Client Name</p>
            <p class="text-light">{{ $booking->user->getName() }}</p>
        </div>
    </div>

    <hr>
    <div class="d-flex justify-content-between">
        <div>
            <p class="text-light">Hotel Name</p>
            <p class="text-light">{{ $booking->hotel->getName() }}</p>
        </div>
        <div>
            <p class="text-light">City</p>
            <p class="text-light">{{ $booking->hotel->city->getName() }}</p>
        </div>
    </div>

    <hr>
    <div>
        <p class="text-light">Room Number</p>
        <p class="text-light">{{ $booking->room->getRoomNumber() }}</p>
    </div>

    <hr>
    <div class="text-end">
        <p class="fw-bold">Total: <span class="text-success">{{ $booking->room->getPrice() }} DH</span></p>
    </div>
</body>
</html>