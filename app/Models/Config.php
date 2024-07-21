<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'logoHeader',
        'image',
        'telephone',
        'addresse',
        'email',
        'description',
        'frais',
        'icon',
    ];


}
