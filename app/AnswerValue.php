<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerValue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answer_values';

    /**
    *Get the question.
    *
    *@return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function question(){
        return $this->belongTo('App\Question');
    }

    /**
    *Get the answer.
    *
    *@return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function answer(){
        return $this->belongTo('App\Answer');
    }
}
