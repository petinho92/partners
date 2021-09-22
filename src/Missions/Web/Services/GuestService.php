<?php namespace Application\Missions\Web\Services;

use Application\Entity\Guest;

class GuestService{

    /**
     * @param array $input
     * @return Guest
     * @throws \Atomino\Carbon\ValidationError
     */
    public function create (array $input){
        $guest = Guest::create();
        $guest->name = $input['_name'];
        $guest->organisation =$input['_organisation'];
        $guest->email =$input['_email'];
        $guest->mobile =$input['_mobile'];
        $guest->programs = $input['_programs'];
        $guest->foodticket =$input['_foodTicket'];
        $guest->lang =$input['_lang'];

        $guest->save();
        return $guest;
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

}
