<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        Quiz::create([
            'user_id' => $user->id,
            'title' => 'Moj prvi kviz',
            'description' => 'Ovo je opis za moj prvi kviz',
        ]);
    }
}
