<?php namespace Application\Missions\Admin\Services;

use Application\Entity\Guest;

class GuestService
{

    public function getAll(): array
    {
        $data = Guest::search()->collect();
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
        return Guest::search()->count();
    }

    public function checkByHash($id, $hash)
    {
        $guest = Guest::pick($id);
        if ($guest) {
            if ($hash === md5($guest->guid)) {
                return true;
            }
        }
        return false;
    }

    public function getGuestNamebyID($id)
    {
        if (Guest::pick($id)) {
            $guest = Guest::pick($id);
            return $guest->name;
        }
        return false;
    }
}
