<h2>Meeting Invitation</h2>

<p>Hello {{ $data['name'] }},</p>

<p>You have a meeting scheduled with us.</p>

<p><strong>Date:</strong> {{ $data['date'] }}</p>
<p><strong>Time:</strong> {{ $data['time'] }}</p>
<p><strong>Mode:</strong> {{ $data['mode'] }}</p>
<p><strong>Google Meet Link:</strong> <a href="{{ $data['meet_link'] }}">{{ $data['meet_link'] }}</a></p>

@if (!empty($data['message']))
<p><strong>Message:</strong> {{ $data['message'] }}</p>
@endif

<p>We look forward to meeting you!</p>
