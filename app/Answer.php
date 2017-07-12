<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * Get the values of the answer.
     */
    public function answerValues()
    {
        return $this->hasMany('App\AnswerValue');
    }

}
