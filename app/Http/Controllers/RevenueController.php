<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingTour;
use App\Models\Tour;
use App\Models\User;
use DateTime;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RevenueController extends Controller
{
    public function revenue()
    {
        $tours = Tour::oldest()->paginate(config('app.default_paginate_tour'));

        foreach ($tours as $tour) {
            foreach ($tour->users as $booking) {
                $tour->revenue = $booking->pivot->where('status', '=', 1)->where('tour_id', '=', $tour->id)->sum('total_price');
                $total = $booking->pivot->where('status', '=', 1)->sum('total_price');
                $count = $booking->pivot->where('status', '=', 1)->count();
                $cancel_count = $booking->pivot->where('status', '<>', 1)->count();
            }
        }

        return view('admin.booking_revenue', compact('tours', 'total', 'count', 'cancel_count'));
    }
}
