<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'object-type',
        'object-id',
    ];
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'object-id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'object-id', 'id');
    }
}
