<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    public static $select = ['id', 'title', 'author', 'desc', 'imgPath'];
    protected $fillable =[
        'title', 'author', 'desc', 'imgPath'
    ];


    public function categoriNews () : BelongsToMany {
        return $this->belongsToMany(Catrgoty::class, 'catygory_has_news', 'news_id' , 'catigory_id');
    }
}

