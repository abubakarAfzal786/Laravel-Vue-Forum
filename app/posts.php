<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Sluggable;
class posts extends Model
{
    use Sluggable;
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
/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
   public function user()
   {
       return $this->belongsTo('App\User');
   }
   public function getPathAttribute()
   {
return "question/$this->slug";
   }
}
