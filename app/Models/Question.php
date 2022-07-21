<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $table = 'questions';
    public $timestamps = false;

    static public function get_question_by_id($id)
    {
        return $questions = DB::table('questions')->where('id', '=', $id)->get();
    }
    static public function get_max_question()
    {
        return DB::table('questions')->latest('id');
    }
    public function answers()
    {
        return $this->hasMany('App/Models/Answer', 'question_id');
    }
    static public function correct_answer($id)
    {
        return $answer = DB::table('answers')->where('correct_answer', '=', 1)->where('question_id', '=', $id)->get();

    }
    static public function count()
    {
        return DB::table('questions')->count();
    }
}