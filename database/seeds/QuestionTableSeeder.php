<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'text' => 'Texto de la pregunta 1',
                'name' => 'pregunta1',
                'option1' => 'Opcion 11',
                'option2' => 'Opcion 12',
                'option3' => 'Opcion 13',
                'option4' => 'Opcion 14',
                'true_answer' => '2',
            ],
            [
                'text' => 'Texto de la pregunta 2',
                'name' => 'pregunta2',
                'option1' => 'Opcion 21',
                'option2' => 'Opcion 22',
                'option3' => 'Opcion 23',
                'option4' => 'Opcion 24',
                'true_answer' => '4',
            ],
            [
                'text' => 'Texto de la pregunta 3',
                'name' => 'pregunta3',
                'option1' => 'Opcion 31',
                'option2' => 'Opcion 32',
                'option3' => 'Opcion 33',
                'option4' => 'Opcion 34',
                'true_answer' => '3',
            ],
            [
                'text' => 'Texto de la pregunta 4',
                'name' => 'pregunta4',
                'option1' => 'Opcion 41',
                'option2' => 'Opcion 42',
                'option3' => 'Opcion 43',
                'option4' => 'Opcion 44',
                'true_answer' => '1',
            ],
            [
                'text' => 'Texto de la pregunta 5',
                'name' => 'pregunta5',
                'option1' => 'Opcion 51',
                'option2' => 'Opcion 52',
                'option3' => 'Opcion 53',
                'option4' => 'Opcion 54',
                'true_answer' => '2',
            ]
        ];

        foreach($questions as $question){
            Question::create($question);
        }
    }
}
