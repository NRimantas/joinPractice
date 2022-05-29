<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'maker',
        'model',
        'color',
        'plate_number',
        'release_year'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
