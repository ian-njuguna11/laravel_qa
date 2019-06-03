<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable= ['tittle','body'];

    public function user(){
        return $this->belongsTo(user::class);
    }
    // $question = Question::find(1);
    // $question->user->email;
}
