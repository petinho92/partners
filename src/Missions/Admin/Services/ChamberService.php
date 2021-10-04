<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Chamber;
use Atomino\Carbon\ValidationError;

class ChamberService
{

    public function getAll(): array
    {
        $data = Chamber::search()->collect();

        $array = array();
        foreach ($data as $adat){
            array_push($array, (object)[
                'id' => $adat->id,
                'name' => $adat->name,
                'email' => $adat->email,
                'foodticket' => $adat->foodTicket,
                'qrcode' => $adat->getQRCode()
            ]);
        }
        return $array;
    }
    public function getfilteredList() : array|object
    {
        $data = Chamber::search()->count();
        $array = array();
        foreach ($data as $adat){
            array_push($array, (object)[
                'id'=>$adat->id,
                'name' => $adat->name,
                'email' => $adat->email,
                'foodticket'=> $adat->foodticket,
                'qrcode' => $adat->getQRCode()
            ]);
        }
        return $array;
    }

    public function getCount(): int
    {
        return Chamber::search()->count();
    }

    public function checkByHash($id, $hash)
    {
        $chamber = Chamber::pick($id);
        if ($chamber) {
            if ($hash === md5($chamber->guid)) {
                return true;
            }
        }
        return false;
    }

    public function getChamberNamebyID($id)
    {
        if (Chamber::pick($id)) {
            $chamber = Chamber::pick($id);
            return $chamber->name;
        }
        return false;
    }

}