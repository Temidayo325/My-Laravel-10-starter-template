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
		try {
			$newStudents = Student::create([
				'gender' => $this->student->gender,
				'admission_number' => $this->student->admission_number,
				'state' => $this->student->state,
				'result' => null,
				'answers' => null,
				'school_type' => $this->student->school_type,
				'theoryResult' => 0,
				'theoryAnswers' => Null
			]);
			return $newStudents;
		} catch (\Exception $e) {
			throw new \Exception($e->getMessage());
		}
	}
}