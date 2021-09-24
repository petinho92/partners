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
#[Validator('name', NotBlank::class, ['message'=>"Please enter your name"])]
#[Validator('chamber', NotBlank::class, ['message'=>"Please select your chamber"])]
#[Validator('address', NotBlank::class, ['message'=>"Please enter your address"])]
#[Validator('programs', NotBlank::class, ['message'=>"Please select a program"])]
#[Validator('chambership_number', NotBlank::class, ['message'=>"Please enter your registry number at the chamber"])]
#[Validator('email', NotBlank::class, ['message'=>"Please enter your email address"])]
#[Validator('email', Email::class, ['message'=>"Email format is not valid"])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]

#[Modelify(\Application\Database\DefaultConnection::class, 'chamber', true)]
class Chamber extends _Chamber{
    public function getQRCode(){
        return "MIK51-chamber-".$this->id.'-'.md5($this->guid);
    }
}