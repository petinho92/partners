<?php namespace Application\Missions\Web\Api;


use Application\Missions\Web\Services\ChamberService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\InstructorService;
use Application\Missions\Web\Services\QRService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;
use JetBrains\PhpStorm\ArrayShape;

class StatApi extends Api
{
    public function __construct(private StudentService $studentService, private InstructorService $instructorService,
                                private ChamberService $chamberService, private GuestService $guestService,
                                private QRService $qrService)
    {
    }


//    #[Route(self::GET, '/getStudent')]
//    public function getStudent(){
//        return $this->studentService->getAll();
//    }
//    #[Route(self::GET, '/getInstructor')]
//    public function getInstructor(){
//     return $this->instructorService->getAll();
//    }
//
//    #[Route(self::GET, '/getChamber')]
//    public function getChamber(){
//        return $this->chamberService->getAll();
//    }
//    #[Route(self::GET, '/getGuest')]
//    public function getGuest(){
//       return $this->guestService->getAll();
//    }
//
//    #[Route(self::GET, '/getList')]
//    public function getList(){
//        $student = $this->studentService->getAll();
//        $instructor = $this->instructorService->getAll();
//        $chamber = $this->chamberService->getAll();
//        $guest = $this->guestService->getAll();
//        return array_merge($student, $instructor, $chamber, $guest);
//
//    }
//
//    #[Route(self::GET, '/getCount')]
//    #[ArrayShape(['student' => "int", 'instructor' => "int", 'chamber' => "int", 'guest' => "int"])] public function getCount()
//    {
//        $student = $this->studentService->getCount();
//        $instructor = $this->instructorService->getCount();
//        $chamber = $this->chamberService->getCount();
//        $guest = $this->guestService->getCount();
//        return array(
//            'student'=> $student,
//            'instructor' => $instructor,
//            'chamber' =>$chamber,
//            'guest' => $guest
//        );
//    }
}
