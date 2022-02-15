<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parsingurl extends Model
{
    use HasFactory;
    protected $table = 'parsingurl';
    public $timestamps = false;
    protected $fillable = [
        'url',
    ];
}
