<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiUsers extends Model
{
    protected $fillable = [
        'name',
        'surame',
        'address',
    ];
    use HasFactory;
}
