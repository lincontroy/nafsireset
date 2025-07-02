@extends('layouts.main')

@section('content')

<!-- ================> Donate Page <================== -->
<div class="donate-section padding--top padding--bottom bg-white">
    <div class="container">
        <div class="section-header text-center">
            <h2>Support Our Mission</h2>
            <p>Your donation helps us provide affordable mental health support to underserved communities across Kenya.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="donate__form bg-light p-4 rounded shadow">
                    <form action="{{ route('donate.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="amount" class="form-control" placeholder="Donation Amount (KES)" required>
                        </div>
                        <div class="mb-3">
                            <select name="method" class="form-select" required>
                                <option value="" disabled selected>Select Payment Method</option>
                                <option value="mpesa">M-PESA</option>
                                <option value="card">Credit/Debit Card</option>
                                <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="default-btn move-right"><span>Donate Now</span></button>
                        </div>
                    </form>
                </div>

                <div class="mt-4 text-center text-muted small">
                    <p>We are a registered Kenyan organization. All donations go directly toward therapy services, outreach programs, and community wellness campaigns.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
