<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Decanatura;
use App\Models\Event;
use App\Models\Image;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class SearchCoursesController extends Controller
{

    public function index(Request $request)
    {
        // dd($request->all());
        $events = Event::all();

        $decanaturas = Decanatura::all();


        $query = Course::query()->where('status', 2);

        if (isset($request->search) && ($request->search != null)) {
            $query->whereHas('decanatura', function ($q) use ($request) {
                $q->whereIn('slug', $request->search);
            })->orWhereHas('event', function ($q) use ($request) {
                $q->whereIn('slug', $request->search);
            });
        };

        return Inertia::render('Frontend/SearchCoursesFrontend', [

            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'courses' => $query->where('status', 2)->get()->map(function ($course) {
                return [
                    'image' => asset('storage/' .  $course->image->url),
                    'name' => $course->name,
                    'description' => $course->description,
                    'decanatura_id' => $course->decanatura_id,
                    'event_id' => $course->event_id,
                    'status' => $course->status,
                    'price' => $course->price,
                    'fecha_init' =>  Carbon::parse($course->fecha_init)->format('m/d')
                ];
            }),
            'count' => $query->count(),
            'events' => $events,
            'decanaturas' => $decanaturas,

        ]);
    }
}
