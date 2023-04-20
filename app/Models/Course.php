<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;
    protected $guarded = ['id', 'status'];
    protected $withCount = ['students'];
    protected $fillable = [
        'name',
        'slug',
        'duration',
        'description',
        'price',
        'url_meet',
        'fecha_init',
        'fecha_end',
        'user_id',
        'url',
        'image',
        'decanatura',
        'user'
    ];


    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // public function getRatingAttribute(){
    //     return $this->reviews();
    // }

    // public function getRouteKeyName()
    // {
    //     return "slug";
    // }

    //relacion uno a muchos
    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    //RElacion uno a muchos inversa
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function event()
    {
        return $this->belongsTo('App\Models\Event');
    }

    public function decanatura()
    {
        return $this->belongsTo('App\Models\Decanatura');
    }
    //Relacion muchos a muchos
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
    }

    //relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, 'App\Models\Section');
    }

    //relacion uno a uno

    public function observation()
    {
        return $this->hasOne('App\Models\Observation');
    }
}
