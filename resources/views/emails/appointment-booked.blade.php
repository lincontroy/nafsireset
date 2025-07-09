<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Appointment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa; padding: 20px;">

<div class="container bg-white p-4 rounded shadow-sm" style="max-width: 600px; margin: auto; border: 1px solid #ddd;">
    <div class="text-center mb-4">
        <img src="https://nafsireset.com/logo.png" alt="Logo" style="max-height: 80px;">
    </div>

    <h2 class="text-center text-primary">New Appointment Booked</h2>
    <hr>

    <table class="table table-borderless">
        <tr>
            <th style="width: 150px;">Name:</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>{{ $data['phone'] }}</td>
        </tr>
        <tr>
            <th>Date:</th>
            <td>{{ $data['date'] }}</td>
        </tr>
        <tr>
            <th>Time:</th>
            <td>{{ $data['time'] }}</td>
        </tr>
        <tr>
            <th>Mode:</th>
            <td>{{ $data['mode'] }}</td>
        </tr>
        @if(!empty($data['message']))
        <tr>
            <th>Message:</th>
            <td>{{ $data['message'] }}</td>
        </tr>
        @endif
    </table>

    <hr>
    <p class="text-center text-muted" style="font-size: 0.9em;">
        &copy; {{ date('Y') }} Nafsi Reset. All rights reserved.
    </p>
</div>

</body>
</html>
