<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'duration',
        'num_of_participants',
        'cat_tour_id',
        'avgRate',
        'price'
    ];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    public function category_tour()
    {
        return $this->belongsTo(CategoryTour::class, 'cat_tour_id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'booking_tours', 'tour_id', 'account_id')->withPivot('created_at', 'total_price', 'booking_start_date', 'quantity');
    }
}
