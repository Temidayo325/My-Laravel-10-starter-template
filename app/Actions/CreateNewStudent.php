<?php
declare(strict_types = 1);

namespace App\Actions;
use App\Models\Student;

/**
 * 
 */
class CreateNewStudent
{
	public $student;
	function __construct(object $student)
	{
		$this->student = $student;
	}

	public function __invoke()
	{
		// dd($this->student);
		$newStudents = Student::create([
			'gender' => $this->student->gender,
			'admission_number' => $this->student->admission_number,
			'state' => $this->student->state,
			'result' => null,
			'answers' => null
		]);
		return $newStudents;
	}
}