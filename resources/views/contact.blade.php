@extends('layouts.main')

@section('content')

<!-- ================> Contact Page <================== -->
<div class="contect-section padding--top padding--bottom bg-white">
    <div class="container">
        <div class="section-header text-center">
            <h2>Contact Us</h2>
            <p>We’d love to hear from you. Whether you need support, have questions, or want to partner with us — reach out.</p>
        </div>

        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact__form shadow p-4 rounded bg-light">
                    <form action="{{ route('contact.submit') }}" method="POST" id="contact-form">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="default-btn move-right"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-6">
                <div class="contact__info bg-ash p-4 rounded shadow">
                    <h5 class="mb-3">Our Contact Details</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-phone-alt me-2 text-primary"></i> +254768469417</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2 text-primary"></i> info@nafsireset.com</li>
                        <li class="mb-2"><i class="fas fa-globe me-2 text-primary"></i> www.nafsireset.com</li>
                    </ul>
                    <h6 class="mt-4">Social Media</h6>
                    <div class="footer__social mt-2">
                        <a href="#"><i class="fab fa-facebook-f me-3"></i></a>
                        <a href="#"><i class="fab fa-twitter me-3"></i></a>
                        <a href="#"><i class="fab fa-instagram me-3"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in me-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
