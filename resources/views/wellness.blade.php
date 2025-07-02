@extends('layouts.main')

@section('content')

<!-- ================> Wellness Techniques Section Start <================== -->
<div class="wellness-section padding--top padding--bottom bg-white">
    <div class="container">
        <div class="section-header text-center">
            <h2>Wellness Techniques for a Balanced Life</h2>
            <p>Explore practical strategies to improve your mental, emotional, physical, social, and spiritual well-being.</p>
        </div>

        <div class="row g-4">

            <!-- Mental Wellness -->
            <div class="col-lg-6">
                <div class="wellness__card p-4 shadow-sm border rounded h-100">
                    <h4 class="mb-3">🧠 Mental Wellness Techniques</h4>
                    <ul class="list-unstyled">
                        <li><strong>Mindfulness & Meditation:</strong> Daily practice helps reduce stress and anxiety.</li>
                        <li><strong>Journaling:</strong> Writing thoughts helps process emotions and gain clarity.</li>
                        <li><strong>Limiting Screen Time:</strong> Reduces overstimulation and improves focus.</li>
                        <li><strong>Learning New Skills:</strong> Keeps the mind sharp and boosts confidence.</li>
                    </ul>
                </div>
            </div>

            <!-- Physical Wellness -->
            <div class="col-lg-6">
                <div class="wellness__card p-4 shadow-sm border rounded h-100">
                    <h4 class="mb-3">🫀 Physical Wellness Techniques</h4>
                    <ul class="list-unstyled">
                        <li><strong>Regular Exercise:</strong> Boosts mood and energy levels (e.g., walking, yoga, dancing).</li>
                        <li><strong>Balanced Diet:</strong> Eating whole, nutrient-rich foods supports brain and body function.</li>
                        <li><strong>Hydration:</strong> Drinking enough water improves mood, skin, and energy.</li>
                        <li><strong>Quality Sleep:</strong> Aim for 7–9 hours; helps with emotional regulation and recovery.</li>
                    </ul>
                </div>
            </div>

            <!-- Emotional Wellness -->
            <div class="col-lg-6">
                <div class="wellness__card p-4 shadow-sm border rounded h-100">
                    <h4 class="mb-3">🧘🏽‍♀️ Emotional Wellness Techniques</h4>
                    <ul class="list-unstyled">
                        <li><strong>Setting Boundaries:</strong> Protects your peace and mental energy.</li>
                        <li><strong>Therapy or Counseling:</strong> Professional support for mental health and growth.</li>
                        <li><strong>Gratitude Practice:</strong> Focusing on what’s good can rewire the brain for positivity.</li>
                        <li><strong>Letting Go of Toxic Relationships:</strong> Reduces emotional drain.</li>
                    </ul>
                </div>
            </div>

            <!-- Social Wellness -->
            <div class="col-lg-6">
                <div class="wellness__card p-4 shadow-sm border rounded h-100">
                    <h4 class="mb-3">🤝 Social Wellness Techniques</h4>
                    <ul class="list-unstyled">
                        <li><strong>Spending Time with Loved Ones:</strong> Enhances feelings of belonging and support.</li>
                        <li><strong>Joining Support Groups or Communities:</strong> Reduces isolation.</li>
                        <li><strong>Volunteering:</strong> Increases purpose and joy.</li>
                    </ul>
                </div>
            </div>

            <!-- Spiritual Wellness -->
            <div class="col-lg-12">
                <div class="wellness__card p-4 shadow-sm border rounded">
                    <h4 class="mb-3">🕊️ Spiritual Wellness Techniques</h4>
                    <ul class="list-unstyled">
                        <li><strong>Prayer or Spiritual Reflection:</strong> Brings inner peace and direction.</li>
                        <li><strong>Spending Time in Nature:</strong> Promotes connection and grounding.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================> Wellness Techniques Section End <================== -->

@endsection
