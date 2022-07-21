<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Answer
{
    protected $table = 'answers';
    public $timestamps = false;
    static public function get_answers($id)
{
    return $answers = DB::table('answers')->where('question_id', '=', $id)->get();
}

}