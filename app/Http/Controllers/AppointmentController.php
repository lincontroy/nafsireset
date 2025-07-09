<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AppointmentBooked;
use Illuminate\Support\Facades\Mail;


class AppointmentController extends Controller
{
    public function showForm()
    {
        return view('appointments.form');
    }

    public function submitForm(Request $request)
    {


        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'nullable|string',
        ]);

        // Email to recipient
        Mail::to('lincolnmunene37@gmail.com')->send(new AppointmentBooked($validated));

        Mail::to('nafsireset@gmail.com')->send(new AppointmentBooked($validated));

        return back()->with('success', 'Appointment booked! We’ll contact you soon.');
    }

    private function getGoogleClient()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->addScope(Google_Service_Calendar::CALENDAR);
        $client->setRedirectUri(route('google.callback'));
        $client->setAccessType('offline');
        $client->setPrompt('consent');
        return $client;
    }
}

