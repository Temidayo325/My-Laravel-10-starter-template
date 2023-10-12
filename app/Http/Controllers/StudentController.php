<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Question\Question;

class StudentController extends Controller
{
    public function create(StudentRequest $request)
    {
    	// $student = ( new \App\Actions\CreateNewStudent((object) $request->all()) )();
    	// dd($questions);
    	$questions = new Question();
    	return redirect()->action([\App\Http\Controllers\StudentController::class, 'loadQuestions']);
    	// return view('components.assessment', ['questions' => $questions]);
    }

    public function loadQuestions()
    {
    	$questions = new Question();
    	return view('components.assessment', ['questions' => $questions]);
    }
}
