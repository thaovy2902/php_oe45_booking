<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingTourController extends Controller
{
    public function showBookingTour()
    {
        $user = Auth::user();
        $selectedTour = Tour::find(2);
        return view('booking.booking_form', [
            'user' => $user,
            'selectedTour' => $selectedTour,
        ]);
    }
}
