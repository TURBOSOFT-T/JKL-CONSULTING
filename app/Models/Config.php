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
        'logo2',
        'icon2',
        'frais2',
        'logoHeader2',
        'telephone2',
        'addresse2',
        'email2',
        'description2',
        'frais2',
        'icon3',
        'logo3',
        'icon3',
    ];


}
