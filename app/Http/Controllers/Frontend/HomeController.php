<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Decanatura;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::take(3)->get()->map(function ($event) {
            return [
                'image' => asset('storage/' .  $event->image->url),
                'title' => $event->name,
                'description' => $event->description,
            ];
        });;

        $decanaturas = Decanatura::take(3)->get()->map(function ($decanatura) {
            return [
                'image' => asset('storage/' .  $decanatura->image->url),
                'email' => $decanatura->email,
                'title' => $decanatura->name,
                'description' => $decanatura->description,
            ];
        });;

        return Inertia::render('Frontend/HomeFrontend', [
            'events' => $events,
            'decanaturas' => $decanaturas,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}
