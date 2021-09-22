<?php namespace Application\Missions\Web\Services;

use Application\Entity\Instructor;
use Atomino\Carbon\ValidationError;
use http\Exception;


class InstructorService{

    /**
     * @param array $input
     * @return Instructor
     * @throws ValidationError
     */
    public function create(array $input){
        $instructor = Instructor::create();

        $instructor->name = $input['_name'];
        $instructor->organisation = $input['_organisation'];
        $instructor->email = $input['_email'];
        $instructor->mobile = $input['_mobile'];
        $instructor->is_lecturer=$input['_is_lecturer'];
        $instructor->is_instructor=$input['_is_instructor'];
        $instructor->programs = $input['_programs'];
        $instructor->foodticket = $input['_foodTicket'];
        $instructor->lang = $input['_lang'];
        $instructor->save();
        return $instructor;
    }
    public function checkByHash($id, $hash)
    {
        $instructor = Instructor::pick($id);
        if ($instructor) {
            if ($hash === md5($instructor->guid)) {
                return true;
            }
        }
        return false;
    }

}
