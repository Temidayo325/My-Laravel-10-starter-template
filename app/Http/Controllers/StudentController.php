<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Question\Question;
use App\Services\MarkCalculations;

class StudentController extends Controller
{
    public function create(StudentRequest $request)
    {
        $studentExist = \App\Models\Student::query()->where('admission_number', $request->admission_number)->first();
        // dd($studentExist);
        if (null !== $studentExist) 
        {
            return back()->withInput();
        }
    	
        $student = ( new \App\Actions\CreateNewStudent((object) $request->all()) )();
        session()->put('admission_number', $student->admission_number);
        return redirect()->action([\App\Http\Controllers\StudentController::class, 'loadQuestions']);
    }

    public function loadQuestions()
    {
    	// $questions = new Question();
        // dd(session()->get('admission_number'));
        return view('components.assessment', ['admission_number' => session()->get('admission_number')]);
    	// return view('components.assessment', ['questions' => $questions]);
    }

    public function submit(Request $request)
    {
        $student = \App\Models\Student::query()->where('admission_number', $request->admission_number)->first();
        if ($student->answers == null) 
        {
            $gdp = MarkCalculations::gdp($request->gdp);
            $gnp = MarkCalculations::gnp($request->gnp);
            $nnp = MarkCalculations::nnp($request->nnp);

            $finalTheoryMark = $gdp + $gnp + $nnp;

            $saveTheoryQuestions = [$request->gdp, $request->gnp, $request->nnp];
            $student->answers = $request->payload;
            $student->theoryResult = $finalTheoryMark;
            $student->theoryAnswers = $saveTheoryQuestions;
            $student->save();
        }
    

        return response()->json([
            "error" => false,
            "message" => "Submitted succesfully"
        ]);
        //Send payload to Python Endpoint; 
    }

    
}
