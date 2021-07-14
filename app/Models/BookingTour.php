<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTour extends Model
{
    use HasFactory;

    protected $fillable = [
        'total-price',
        'booking-start-date',
        'status',
        'quantity',
        'tour-id',
        'account-id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'account_id', 'id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'id');
    }
}
