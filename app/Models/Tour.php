<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillable = [
        'name',
        'description',
        'duration',
        'num_of_participants',
        'cat_tour_id',
        'rating',
        'price',
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
