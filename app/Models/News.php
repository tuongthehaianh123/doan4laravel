<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{ 
    public $timestamps = false;
    protected $table="news";
    protected $fillable = ['id','title','content','image','create_at','update_at'];//them
    use HasFactory;
}
