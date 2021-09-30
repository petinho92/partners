<?php namespace Application\Missions\Web\Services;

use Application\Entity\Eventacs;
use Application\Entity\Student;
use function Atomino\debug;

class QRService
{
    public function __construct(private StudentService    $studentService,
                                private InstructorService $instructorService, private ChamberService $chamberService,
                                private GuestService      $guestService)
    {
    }

    public function checkByHash($code)
    {
        if(preg_match('(MIK51-[s|c|g|i][a-z]*-[0-9]+-[0-9a-zA-Z]*)', $code)){
            debug('match');
            $data = explode("-", $code);
            if ($data[1] === 'student') {
                if ($this->studentService->checkByHash($data[2], $data[3])) {
                    return $this->studentService->getStudentNamebyID($data[2]);
                } else {
                    return false;
                }
            }
            if ($data[1] === 'instructor') {
                if ($this->instructorService->checkByHash($data[2], $data[3])) {
                    return $this->instructorService->getInstructorNamebyID($data[2]);
                } else {
                    return false;
                }
            }
            if ($data[1] === 'chamber') {
                if ($this->chamberService->checkByHash($data[2], $data[3])) {
                    return $this->chamberService->getChamberNamebyID($data[2]);
                } else {
                    return false;
                }
            }
            if ($data[1] === 'guest') {
                if ($this->guestService->checkByHash($data[2], $data[3])) {
                    return $this->guestService->getGuestNamebyID($data[2]);
                } else {
                    return false;
                }
            }
        }
        debug('no match');
        return false;
    }

    public function createAccessQRCode(array $input)
    {
        $event = Eventacs::create();
        $event->station = $input['_programType'];
        $event->phase = $input['_programName'];
        $event->qrcode = $input['_qrCode'];
        $event->save();
        return $event;
    }
}
