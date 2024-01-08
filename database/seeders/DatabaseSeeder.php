<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\DateFactory;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = [];
        for ($i = 1; $i < 10; $i++) {
            $user = [];
            $user['name'] = Str::random(10);
            $user['email'] = Str::random(10) . '@' . Str::random(5) . 'com';
            $user['birthday'] = rand(1990, 2006) . '-' . rand(1, 12) . '-' . rand(1, 31);
            $user['password'] = Hash::make('12345');
            $users[] = $user;
        }

//        DB::table('users')->insert([
//            [
//                'name' => 'name1',
//                'email' => 'email@email.com',
//                'birthday' => '2000-04-04'
//            ]
//        ]);
//        DB::table('users')->insert($users);
//        $countries = Country::factory()->count(5)->create();
//        City::factory()->count(5)->create(['country_id' => $countries->random()]);
        $this->call([
            CountriesSeeder::class,
            CitiesSeeder::class,
            PostsSeeder::class
        ]);
    }
}
