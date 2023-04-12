<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decanatura extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'url',
        'image',
    ];
    use HasFactory;
    protected $guarded = ['id'];


    //relacion uno a muchos 
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
