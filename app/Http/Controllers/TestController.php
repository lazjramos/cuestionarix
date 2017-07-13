<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\AnswerValue;

class TestController extends Controller
{
    /**
    * Display the index page.
    * GET /
    *
    * @return Response
    */
    public function index(){
        $questions = Question::all();
        $answers = Answer::all();
        $outAnswers = [];
        
        if(count($answers) > 0 ){
            foreach($answers as $answer){
                $success = 0;
                $answerValues = AnswerValue::where('answer_id','=',$answer->id)->get();

                if(count($answerValues)>0){
                    foreach($answerValues as $answerValue){
                        $questionAnswer = Question::find($answerValue->question_id);
                        if($questionAnswer->true_answer == $answerValue->value){
                            $success++;
                        }
                    }
                }

                array_push($outAnswers,(object)[
                    'id' => $answer->id,
                    'success' => $success
                ]);
            }
        }

        return view('index')
            ->with('questions',$questions)
            ->with('answers', $outAnswers);
    }

    /**
     * Store new element.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        $success = 0;
        $inputs = json_decode($request->input('data'));
        $arrayInputs = (array) $inputs;

        $answer = new Answer();
        $answer->save();

        foreach($arrayInputs as $key => $value)
        {
            $question = Question::where('name','=',$key)->first();

            $answerValue = new AnswerValue();
            $answerValue->question_id = $question->id;
            $answerValue->answer_id = $answer->id;
            $answerValue->value = $value;
            $answerValue->save();

            if($question->true_answer == $value){
                $success++;
            }

        }
        
        return [
                'id' => $answer->id,
                'success' => $success
               ];
    }

    /**
     * Verify an answer
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verify(Request $request){
        $inputs = $request->input('data');
        $questions = Question::all();
        $arrayOut = [];

        foreach($questions as $question){
            $userAnswer = AnswerValue::where('answer_id','=',$inputs)
                            ->where('question_id','=',$question->id)->first();

            array_push($arrayOut,[
                'name' => $question->name,
                'true_answer' => $question->true_answer,
                'user_answer' => $userAnswer->value
            ]);
        }

        return $arrayOut;
    }
}
