<?php

namespace Database\Seeders;

use App\Models\Quiz;
use App\Models\Result;
use App\Models\User;
use Illuminate\Database\Seeder;
 
class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $quiz = Quiz::first();

        Result::create([
            'user_id' => $user->id,
            'quiz_id' => $quiz->id,
            'score' => rand(1,5),
        ]);
    }
}
