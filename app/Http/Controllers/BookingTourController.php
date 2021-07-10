<?php

namespace App\Http\Controllers;

use App\Models\BookingTour;
use App\Models\Tour;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class BookingTourController extends Controller
{
    public function showBookingTour($id)
    {
        $user = Auth::user();
        $selectedTour = Tour::find($id);
        return view('booking.booking_form', [
            'user' => $user,
            'selectedTour' => $selectedTour,
        ]);
    }
    public function storeBookingTour(Request $request)
    {
        $tourId = $request->tourId;
        $accountId = Auth::user()->id;
        $inputDateStart = strtotime($request->dateStart);
        $dateStart = date('Y-m-d', $inputDateStart);
        $totalPrice = $request->totalPrice;
        $status = 0;
        $quantity = $request->quantity;
        $duration = $request->duration;

        $storeDataBooking = BookingTour::create([
            'tour_id' => $tourId,
            'account_id' => $accountId,
            'duration' => $duration,
            'total_price' => $totalPrice,
            'booking_start_date' => $dateStart,
            'status' => $status,
            'quantity' => $quantity,
        ]);

        return view('booking.vnp_payment', [
            'totalPrice' => $storeDataBooking->total_price,
            'bookingId' => $storeDataBooking->id,
        ]);
    }
}
