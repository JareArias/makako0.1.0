<?php

namespace Database\Seeders;

use App\Models\Qr;
use Illuminate\Database\Seeder;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::create([
            'name' => 'Nickie Nina',
            'email' => 'nickie@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(15)->create();

        
      
    }
}
