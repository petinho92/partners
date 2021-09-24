<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Instructor;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"Please enter your name"])]
#[Validator('organisation', NotBlank::class, ['message'=>"Please enter your organization"])]
#[Validator('email', NotBlank::class, ['message'=>"Please enter your email address"])]
#[Validator('programs', NotBlank::class, ['message'=>"Please select a program"])]
#[Validator('mobile', Regex::class, ['pattern'=>"/^[0-9]*$/",'message'=>"Phone Number may only contain numbers"])]
#[Validator('email', Email::class, ['message'=>"Email format is not valid"])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]
#[Modelify(\Application\Database\DefaultConnection::class, 'instructor', true)]
class Instructor extends _Instructor{

    public function getQRCode(){
        return "MIK51-instructor-".$this->id.'-'.md5($this->guid);
    }
}