<?php namespace Application\Missions\Admin\Api;


use Application\Missions\Admin\Services\ChamberService;
use Application\Missions\Admin\Services\GuestService;
use Application\Missions\Admin\Services\InstructorService;
use Application\Missions\Admin\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use JetBrains\PhpStorm\ArrayShape;

class StatApi extends Api
{
    public function __construct(private StudentService $studentService, private InstructorService $instructorService,
                                private ChamberService $chamberService, private GuestService $guestService)
    {
    }

    #[Route(self::GET, '/getList')]
    public function getList()
    {
        $student = $this->studentService->getAll();
        $instructor = $this->instructorService->getAll();
        $chamber = $this->chamberService->getAll();
        $guest = $this->guestService->getAll();
        return array_merge($student, $instructor, $chamber, $guest);

    }

    #[Route(self::GET, '/getCount')]
    #[ArrayShape(['student' => "int", 'instructor' => "int", 'chamber' => "int", 'guest' => "int"])] public function getCount()
    {
        $student = $this->studentService->getCount();
        $instructor = $this->instructorService->getCount();
        $chamber = $this->chamberService->getCount();
        $guest = $this->guestService->getCount();
        return array(
            'student' => $student,
            'instructor' => $instructor,
            'chamber' => $chamber,
            'guest' => $guest
        );
    }

    public function getFood()
    {

        $instructor = $this->instructorService->getFood();
//        $chamber = $this->chamberService->getFood();
//        $guest = $this->guestService->getFood();
    }
}
