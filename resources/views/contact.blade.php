@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
    <div class="card-header text-white" style="background-color: #15854d;color:white;">
    <h4 class="mb-0">Book an Appointment</h4>
</div>

        <div class="card-body">
        @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        <form method="POST" action="{{ route('book.submit') }}">
        @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+254..." required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
                <div class="mb-3">
                    <label for="mode" class="form-label">Online/offline</label>
                    <select id="mode" name="mode" class="form-control">
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Any additional info..."></textarea>
                </div>
                <button type="submit" class="btn w-100" style="background-color: #15854d;color:white;">Book Appointment</button>
            </form>
        </div>
    </div>
</div>

@endsection