<?php

namespace Database\Seeders;

use App\Models\Questions;
use App\Models\Quiz;
use Illuminate\Database\Seeder;
 

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quiz = Quiz::first();

        for ($i = 1; $i <= 5; $i++) {
            Questions::create([
                'quiz_id' => $quiz->id,
                'question_text' => "Pitanje $i",
                'correct_answer' => "Odgovor $i",
            ]);
        }
    }
}
