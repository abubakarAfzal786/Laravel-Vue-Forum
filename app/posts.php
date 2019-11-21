<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class posts extends Model
{
    protected $table="posts";
    protected $fillable=['title','description','image','user_id'];
//     public static function boot()
//     {
//         parent::boot();
//         static::creating(function($posts){
//             dd(Auth::user()); 
// $posts->user_id=Auth::user()->id;
//         });
//     }
   public function user()
   {
       return $this->belongsTo('App\User');
   }
}
