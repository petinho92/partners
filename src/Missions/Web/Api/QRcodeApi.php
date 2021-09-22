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

        $data = explode("-", $code);
        if ($data[1] === 'student') {
            if ($this->studentService->checkByHash($data[2], $data[3])) {
                return $code;
            } else {
                return false;
            }
        }
        if ($data[1] === 'instructor') {
            if ($this->instructorService->checkByHash($data[2], $data[3])) {
                return $code;
            } else {
                return false;
            }
        }
        if ($data[1] === 'chamber') {
            if ($this->chamberService->checkByHash($data[2], $data[3])) {
                return $code;
            } else {
                return false;
            }
        }
        if ($data[1] === 'guest') {
            if ($this->guestService->checkByHash($data[2], $data[3])) {
                return $code;
            } else {
                return false;
            }
        }
        return false;
    }
}
