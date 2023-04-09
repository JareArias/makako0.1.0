<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Decanatura;
use App\Models\Event;
use Illuminate\Support\Str;
use App\Models\User;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        $name = $this->faker->unique()->text($maxNbChars = 30);
        return [
            'name'=> $name,
            'duration'=>$this->faker->randomElement([3,4,5,6,7,8,9,10,11,12]),
            'description'=> $this->faker->paragraph(),
            'status'=> $this->faker->randomElement([Course::BORRADOR,Course::REVISION,Course::PUBLICADO]),
            'slug'=> Str::slug($name),
            'url_meet'=>$this->faker->url(),
            'price'=> $this->faker->randomElement([50,75,100]),
            'fecha_init'=>$this->faker->date(),
            'fecha_end'=>$this->faker->date(),
            
            'user_id' => User::all()->random()->id,
            'event_id' => Event::all()->random()->id,
            'decanatura_id' => Decanatura::all()->random()->id,

        ];
    }
}
