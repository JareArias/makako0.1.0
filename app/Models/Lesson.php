<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $appends = ['revenue'];
    protected $fillable = [
        'name',
        'url',
        'section_id'
       
    ];

    public function getRevenueAttribute(){
      
        return $this->users->contains(auth()->user()->id);
    }


    //relacion unos a muchos inversa
    public function section(){
        return $this->belongsTo('App\Models\Section');
    }
    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
  

}
