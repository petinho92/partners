<?php namespace Application\Missions\Web\Services;

use Application\Entity\Chamber;
use Atomino\Carbon\ValidationError;

class ChamberService
{

    /**
     * @param array $input
     * @return Chamber
     * @throws ValidationError
     */
    public function create(array $input)
    {
        $chamber = Chamber::create();

        $chamber->name = $input['_name'];
        $chamber->chamber = $input['_chamber'];
        $chamber->chambership_number = $input['_chambership_number'];
        $chamber->address = $input['_address'];
        $chamber->email = $input['_email'];
        $chamber->mobile = $input['_mobile'];
        $chamber->programs = $input['_programs'];
        $chamber->foodTicket = $input['_foodTicket'];
        $chamber->lang = $input['_lang'];

        $chamber->save();
        return $chamber;
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
}