<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Decanatura;
use App\Models\Image;
use Illuminate\Support\Str;


class DecanaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $decanaturas = Decanatura::factory(4)->create();

        foreach ($decanaturas as $decanatura) {
            Image::factory(1)->create([
                'imageable_id' => $decanatura->id,
                'imageable_type' => 'App\Models\Decanatura'
            ]);
        }
        // Decanatura::create([
        //     'name' =>  'Ingenieria de Sistemas',
        //     'email' => 'unamad@unamad.edu.pe',
        //     'slug' => Str::slug('Ingenieria de Sistemas'),
        // ]);
        // Decanatura::create([
        //     'name' =>  'Ingenieria Agrindustrial',
        //     'email' => 'unamad@unamad.edu.pe',
        //     'slug' => Str::slug('Ingenieria de Agrindustrial'),
        // ]);
        // Decanatura::create([
        //     'name' =>  'Educacion',
        //     'email' => 'unamad@unamad.edu.pe',
        //     'slug' => Str::slug('Educacion'),

        // ]);
        // Decanatura::create([
        //     'name' =>  'Derecho',
        //     'email' => 'unamad@unamad.edu.pe',
        //     'slug' => Str::slug('Derecho'),
        // ]);
    }
}
