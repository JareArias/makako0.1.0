<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Image;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = Event::factory(5)->create();

        foreach ($events as $event) {
            Image::factory(1)->create([
                'imageable_id' => $event->id,
                'imageable_type' => 'App\Models\Event'
            ]);
        }
        // Event::create([
        //     'name' =>  'Coati',
        //     'slug' => Str::slug('Coati')
        // ]);
        // Event::create([
        //     'name' =>  'Nuses',
        //     'slug' => Str::slug('Nuses')
        // ]);
        // Event::create([
        //     'name' =>  'CISCO TM',
        //     'slug' => Str::slug('CISCO TM;')
        // ]);
    }
}
