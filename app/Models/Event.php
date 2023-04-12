<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
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
    //relacion unos a muchos
    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    //relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
