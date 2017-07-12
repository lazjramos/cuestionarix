<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * Get the values of the answer.
     */
    public function answerValues()
    {
        return $this->hasMany('App\AnswerValue');
    }

}
