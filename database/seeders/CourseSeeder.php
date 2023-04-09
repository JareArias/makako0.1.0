<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Image;
use App\Models\Section;
use App\Models\Lesson;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = Course::factory(20)->create();

        foreach ($courses as $course) {
            Image::factory(1)->create([
                'imageable_id' => $course->id,
                'imageable_type' => 'App\Models\Course'
            ]);

            $sections =   Section::factory(4)->create([
                    'course_id'=> $course->id
            ]);

            foreach($sections as $section){
                    Lesson::factory(4)->create(['section_id'=>$section->id]);

            }
        }

        
    }
}
