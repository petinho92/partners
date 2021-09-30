<?php namespace Application\Missions\Web\Api;

use Application\Missions\Web\Services\ChamberService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\InstructorService;
use Application\Missions\Web\Services\QRService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

class QRcodeApi extends Api
{
    public function __construct(private QRService $qrService, private StudentService $studentService,
                                private InstructorService $instructorService, private ChamberService $chamberService,
                                private GuestService $guestService)
    {
    }

    #[Route(self::GET, '/qr/:code(MIK51-[s|c|g|i][a-z]*-[0-9]+-[0-9a-zA-Z]*)')]
    public function qrGet(string $code)
    {
        //MIK51-student-263-5be164ef006b27adc41690096165fee5
        $result = $this->qrService->checkByHash($code);
        if($result){
            return $code;
        }else return false;

    }
}
