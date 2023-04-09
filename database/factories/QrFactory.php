<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'qrcodes/' .$this->faker->image('public/storage/qrcodes',640,480,null,false),
            /* 'url'=> 'cursos/'.$this->faker->image('public/storage/qrcodes',650,480,null,false) */
            /* 'aeam','../../public/storage/qrcodes' */
        ];
    }
}
