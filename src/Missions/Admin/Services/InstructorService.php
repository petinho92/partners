<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Instructor;
use Atomino\Carbon\ValidationError;


class InstructorService
{
    public function getAll()
    {
        $data = Instructor::search()->collect();

        $array = array();
        foreach ($data as $adat) {
            array_push($array, (object)[
                'id' => $adat->id,
                'name' => $adat->name,
                'email' => $adat->email,
                'foodticket' => $adat->foodticket,
                'qrcode' => $adat->getQRCode()
            ]);
        }
        return $array;
    }

    public function getCount(): int
    {
        return Instructor::search()->count();
    }

    public function checkByHash($id, $hash): bool
    {
        $instructor = Instructor::pick($id);
        if ($instructor) {
            if ($hash === md5($instructor->guid)) {
                return true;
            }
        }
        return false;
    }

    public function getInstructorNamebyID($id): bool|string|null
    {
        if (Instructor::pick($id)) {
            $instructor = Instructor::pick($id);
            return $instructor->name;
        }
        return false;
    }
}
