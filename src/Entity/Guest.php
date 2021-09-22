<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Guest;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"name_blank"])]
#[Validator('organisation', NotBlank::class, ['message'=>"organisation_blank"])]
#[Validator('email', NotBlank::class, ['message'=>"email_blank"])]
#[Validator('programs', NotBlank::class, ['message'=>"programs_blank"])]
#[Validator('mobile', Regex::class, ['pattern'=>"/^[0-9]*$/",'message'=>"mobile_only_number"])]
#[Validator('email', Email::class, ['message'=>"email_not_valid"])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]
#[Modelify(\Application\Database\DefaultConnection::class, 'guest', true)]
class Guest extends _Guest{

    public function getQRCode(){
        return "MIK51-guest-".$this->id.'-'.md5($this->guid);
    }
}