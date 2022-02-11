<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yandexnews extends Model
{
    use HasFactory;
    protected $table = 'yandexnews';
    public $timestamps = false;
    protected $fillable =[
        'title', 'link', 'description', 'guid', 'pubDate'
    ];

}
