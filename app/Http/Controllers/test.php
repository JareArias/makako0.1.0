<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use Inertia\Inertia;
use App\Models\Image;

class test extends Controller
{
       public function index()
    {

        return Inertia::render('test', [
            'courses' => Course::all(),
            'images' => Image::all(),
            
        ]);
    }
}
