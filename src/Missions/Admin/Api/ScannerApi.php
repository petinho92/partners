<?php namespace Application\Missions\Admin\Api;

use Application\Missions\Admin\Services\ChamberService;
use Application\Missions\Admin\Services\GuestService;
use Application\Missions\Admin\Services\InstructorService;
use Application\Missions\Admin\Services\QRService;
use Application\Missions\Admin\Services\StudentService;
use Atomino\Mercury\Responder\Api\Api;
use Atomino\Mercury\Responder\Api\Attributes\Route;

use function Atomino\debug;

class ScannerApi extends Api
{
    public function __construct(private QRService $qrService)
    {
    }


    #[Route(self::POST, '/processingQRCode')]
    public function processingQR()
    {
        if($this->data->get('_programType') != 0 && $this->data->get('_programName') != 0 && $this->data->get('_qrCode') != "")
        {
            debug('semmi se üres');
            $code = $this->qrService->checkByHash($this->data->get('_qrCode'));
            if ($code) {
                $result = $this->qrService->createAccessQRCode($this->data->all());
                return array (
                    'statusCode' => 200,
                    'qrcode'=> $result->qrcode,
                    'name' => $code);
            } else {
                return array(
                    'statusCode' => 422,
                    'message' => 'Nem található ilyen vonalkód!'
                );
            }
        }else{
            return array(
                'statusCode' => 422,
                'message' => 'Mezők kitöltése kötelező!'
            );
        }
//        return array (
//            'statusCode' => 200,
//            'message' => 'Sikeres'
//        );
    }
}
