<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage extends Model
{
    use HasFactory;

    protected $fillable = [
        'reponse1',
        'choix1',
        'choix2',
        'choix3',
        'user_id'
    ];
}
