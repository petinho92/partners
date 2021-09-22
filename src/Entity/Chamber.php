<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Chamber;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;


#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"name_blank"])]
#[Validator('chamber', NotBlank::class, ['message'=>"chamber_blank"])]
#[Validator('address', NotBlank::class, ['message'=>"address_blank"])]
#[Validator('programs', NotBlank::class, ['message'=>"programs_blank"])]
#[Validator('chambership_number', NotBlank::class, ['message'=>"chambership_number_blank"])]
#[Validator('email', NotBlank::class, ['message'=>"email_blank"])]
#[Validator('email', Email::class, ['message'=>"email_not_valid"])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]

#[Modelify(\Application\Database\DefaultConnection::class, 'chamber', true)]
class Chamber extends _Chamber{
    public function getQRCode(){
        return "MIK51-chamber-".$this->id.'-'.md5($this->guid);
    }
}