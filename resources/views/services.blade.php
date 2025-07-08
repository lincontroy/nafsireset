@extends('layouts.main')

@section('content')

<!-- ================> Services Intro Section <================== -->
<div class="about-section bg-white padding--top padding--bottom">
    <div class="container">
        <div class="section-header text-center">
            <h2>Our Services</h2>
            <p>At Nafsi Reset, we believe mental health care should be accessible, culturally relevant, and community-centered. Our wide range of therapy and support services are designed to meet people where they are — emotionally, psychologically, and economically.</p>
        </div>
    </div>
</div>

<!-- ================> Services Grid Section <================== -->
<div class="service-section padding--bottom">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- CBT -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-brain"></i></div>
                    <div class="service__content">
                        <h5>Cognitive Behavioral Therapy (CBT)</h5>
                        <p>A structured, short-term approach that helps clients identify negative thoughts and behaviors and replace them with healthier ones.</p>
                    </div>
                </div>
            </div>

            <!-- Trauma Therapy -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-heartbeat"></i></div>
                    <div class="service__content">
                        <h5>Trauma-Focused Therapy</h5>
                        <p>Specialized sessions aimed at helping individuals recover from childhood trauma, abuse, GBV, or PTSD in a safe and supportive environment.</p>
                    </div>
                </div>
            </div>

            <!-- Group & Family Therapy -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-users"></i></div>
                    <div class="service__content">
                        <h5>Group & Family Therapy</h5>
                        <p>Collaborative sessions that build communication, healing, and mutual understanding among group or family members.</p>
                    </div>
                </div>
            </div>

            <!-- Art & Play Therapy -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-palette"></i></div>
                    <div class="service__content">
                        <h5>Art & Play Therapy</h5>
                        <p>Creative therapies that help children and teens express and process emotions through painting, drawing, or play activities.</p>
                    </div>
                </div>
            </div>

            <!-- Narrative & Mindfulness -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-book-open"></i></div>
                    <div class="service__content">
                        <h5>Narrative & Mindfulness Therapy</h5>
                        <p>Helps clients reframe their personal stories and incorporate mindfulness to manage stress, anxiety, and negative thought patterns.</p>
                    </div>
                </div>
            </div>

            <!-- Couples & Career Counseling -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service__item text-center">
                    <div class="service__icon"><i class="fas fa-briefcase"></i></div>
                    <div class="service__content">
                        <h5>Couples & Career Counseling</h5>
                        <p>Supports healthy communication and conflict resolution in relationships, while guiding individuals through career challenges or transitions.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ================> Community Outreach Section <================== -->
<div class="about-section bg-ash padding--top padding--bottom">
    <div class="container">
        <div class="section-header text-center">
            <h2>Community Outreach</h2>
            <p>Beyond one-on-one therapy, Nafsi Reset is actively involved in outreach and education to break the stigma surrounding mental health in Kenya.</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon"><i class="fas fa-microphone-alt"></i></div>
                    <div class="service__content">
                        <h5>Workshops & Talks</h5>
                        <p>We organize mental health awareness workshops in schools, churches, and community centers.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon"><i class="fas fa-users-cog"></i></div>
                    <div class="service__content">
                        <h5>Youth Empowerment</h5>
                        <p>Programs that help youth develop coping mechanisms, resilience, and purpose in life.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon"><i class="fas fa-hands-helping"></i></div>
                    <div class="service__content">
                        <h5>Support Groups</h5>
                        <p>Safe spaces where people with similar challenges can share, listen, and grow together.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service__item">
                    <div class="service__icon"><i class="fas fa-hands-helping"></i></div>
                    <div class="service__content">
                        <h5>NatureNest</h5>
                        <p>Where Young Minds Grow Safely
                        NurtureNest is our children’s therapy program for ages 0–12, offering a safe and supportive space for emotional healing and growth. We use play, art, and talk therapy to help children manage big feelings, behavior challenges, trauma, and school-related issues. We also support parents with guidance and tools to better understand and connect with their child. Every session is gentle, engaging, and tailored to your child’s age and needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
