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
        'num-of-participants',
        'cat_tour_id',
        'rating',
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'object-id', 'id');
    }
    public function category_tour()
    {
        return $this->belongsTo(Category_tour::class, 'id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'Booking-tour', 'id', 'id');
    }
}
