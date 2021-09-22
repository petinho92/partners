<?php namespace Application\Missions\Web\Services;

use Application\Entity\Student;
use function Atomino\debug;

class StudentService
{
    /**
     * @param array $input
     * @throws \Atomino\Carbon\ValidationError
     * @return Student
     */
    public function create(array $input)
    {
        $student = Student::create();
        debug(Student::class);

        $student->name = $input['_name'];
        $student->email = $input['_email'];
        $student->neptun = $input['_neptun'];
        $student->major = $input['_major'];
        $student->mobile = $input['_mobile'];
        $student->semester = $input['_semester'];
        $student->programs = $input['_programs'];
        $student->lang = $input['_lang'];
        $student->save();
        return $student;
    }

    public function checkByHash($id, $hash)
    {
        $student = Student::pick($id);
        if ($student) {
            if ($hash === md5($student->neptun)) {
                return true;
            }
        }
        return false;
    }
}