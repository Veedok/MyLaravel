<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    public static $select = ['id', 'title', 'author', 'desc', 'imgPath'];
    // public function getNews () {
    //     return DB::table($this->table)
    //     ->select(['id', 'title', 'author', 'desc', 'imgPath'])->get()->toArray();
    // }
    // public function getNewsByID ($id) {
    //     return DB::select("select * where id = :id from {$this->table}", ['id' => $id]);
    // }
    public function addNews ($title, $author, $desc, $imgPath) {

        DB::insert("insert into mylaravel.{$this->table} (title, author, `desc`, imgPath) values ('$title', '$author', '$desc', '$imgPath');");
       return view('admin.create');
    }

}
