<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catrgoty extends Model
{
    use HasFactory;
    protected $table = 'catigory';
    public static $select = ['id', 'catigory'];
}
