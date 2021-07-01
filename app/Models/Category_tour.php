<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> first commit

class Category_tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat-name',
    ];
<<<<<<< HEAD
=======
    public function tours()
    {
        return $this->hasMany(Tour::class, 'id', 'id');
    }
>>>>>>> first commit
}
