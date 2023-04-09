<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    
    use HasFactory;
    protected $fillable = ['fecha','course_id', 'user_id'];
    protected $guarded=['id'];
    //relacio uno a muchos inversa
     public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
