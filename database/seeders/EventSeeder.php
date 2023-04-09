<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
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
        Event::create([
            'name' =>  'Coati',
            'slug'=> Str::slug('Coati')
        ]);
        Event::create([
            'name' =>  'Nuses',
            'slug'=> Str::slug('Nuses')
        ]);
        Event::create([
            'name' =>  'CISCO TM',
            'slug'=> Str::slug('CISCO TM;')
        ]);
        //
    }
}
