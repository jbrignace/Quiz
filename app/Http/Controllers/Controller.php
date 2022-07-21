<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use http\Env\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function start_quiz()
    {
        $question = Question::get_question_by_id(1);

        $data['question'] = $question[0]->question;
        $data['wrong'] = 'n';
        $data['answers'] = Answer::get_answers($question[0]->id);
        $data['count'] = $question[0]->id++;
        return view('quiz')->with($data);
    }
    public function get_question($id)
    {
        $question = Question::get_question_by_id($id);
        $data['question'] = $question[0]->question;
        $data['wrong'] = 'n';
        $data['answers'] = Answer::get_answers($question[0]->id);
        $data['count'] = $question[0]->id++;

        return view('quiz')->with($data);



    }
     public function check_answer()
    {
        $data['wrong'] = 'n';
        $num_rows = Question::count();
        if($_POST['question_number'] >= $num_rows) {
            return view('complete');
        }
        $answer = Question::correct_answer($_POST['question_number']);
        $id = $_POST['question_number'];
        if($answer[0]->answer == $_POST['answer']) {
            $id++;
        } else {
            $data['wrong'] = 'y';
            $data['incorrect_answer'] = $_POST['answer'];
        }
        $question = Question::get_question_by_id($id);
        $data['question'] = $question[0]->question;

        $data['answers'] = Answer::get_answers($question[0]->id);
        $data['count'] = $question[0]->id++;
        return view('quiz')->with($data);
    }
    public function home()
    {
            return view('home');
    }

}
