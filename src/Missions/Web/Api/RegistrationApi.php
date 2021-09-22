<?php namespace Application\Missions\Web\Api;


use Application\Missions\Web\Services\ChamberService;
use Application\Missions\Web\Services\EmailService;
use Application\Missions\Web\Services\GuestService;
use Application\Missions\Web\Services\InstructorService;
use Application\Missions\Web\Services\StudentService;
use Atomino\Carbon\ValidationError;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;


class RegistrationApi extends Api
{
    public function __construct(private StudentService $studentService, private InstructorService $instructorService,
                                private ChamberService $chamberService, private GuestService $guestService,
                                private EmailService $emailService)
    {
    }

    #[Route(self::POST, '/studentPost')]
    public function studentPost()
    {
        try {
            $student = $this->studentService->create($this->data->all());
            $this->emailService->create($student);
        } catch (ValidationError $error) {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200),
        );
    }

    #[Route(self::POST, '/instructorPost')]
    public function instructorPost()
    {
        try {
            $instructor = $this->instructorService->create($this->data->all());
            $this->emailService->create($instructor);
        } catch (ValidationError $error) {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200),
        );
    }

    #[Route(self::POST, '/chamberPost')]
    public function chamberPost()
    {
        try {
            $chamber = $this->chamberService->create($this->data->all());
            $this->emailService->create($chamber);
        } catch (ValidationError $error) {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200),
        );
    }

    #[Route(self::POST, '/guestPost')]
    public function guestPost()
    {
        try {
            $guest = $this->guestService->create($this->data->all());
            $this->emailService->create($guest);
        } catch (ValidationError $error) {
            $this->setStatusCode(422);
            return $error->getMessages();
        }
        return array(
            'statusCode' => http_response_code(200),
        );
    }
}
