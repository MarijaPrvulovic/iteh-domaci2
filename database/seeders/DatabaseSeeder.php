<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Korisnik1',
            'email' => 'korisnik1@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Korisnik2',
            'email' => 'korisnik2@example.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Korisnik3',
            'email' => 'korisnik3@example.com',
            'password' => bcrypt('password'),
        ]);


        $this->call([
            
            QuizSeeder::class,
            QuestionsSeeder::class,
            ResultSeeder::class,
        ]);
    }
}
