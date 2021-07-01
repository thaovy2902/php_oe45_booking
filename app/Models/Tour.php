<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> first commit

class Tour extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $table = 'tours';

=======
>>>>>>> first commit
    protected $fillable = [
        'name',
        'description',
        'duration',
<<<<<<< HEAD
        'num_of_participants',
        'cat_tour_id',
        'rating',
        'price',
    ];
=======
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
>>>>>>> first commit
}
