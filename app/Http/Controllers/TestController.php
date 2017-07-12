<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class TestController extends Controller
{
    public function index(){
        $questions = Question::all();
        $answers = Answer::all();

        return view('index')
            ->with('questions',$questions)
            ->with('answers', $answers);
    }
}
