<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(9)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Teduh Sanubari',
            'email' => 'teduh@gmail.com',
            'password' => Hash::make('11223344'),
            'phone' => '081915216038',
            'roles' => 'ADMIN',
        ]);

        \App\Models\Company::create([
            'name' => 'PT. AFNA DIGITAL INDONESIA',
            'email' => 'afana@link',
            'address' => 'Ciokong',
            'latitude' => '-7.623957',
            'longitude' => '108.597930',
            'radius_km' => '0.5',
            'time_in' => '07:00',
            'time_out' => '16:00',

        ]);
    }
}
