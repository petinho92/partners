<?php namespace Application\Entity;

use Atomino\Carbon\Attributes\Modelify;
use Application\Atoms\Entity\_Student;
use Atomino\Carbon\Plugins\Created\Created;
use Atomino\Carbon\Plugins\Guid\Guid;
use Atomino\Carbon\Attributes\Validator;
use Atomino\Carbon\Validation\UniqueEntity;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;


#[Created]
#[Guid]
#[Validator('name', NotBlank::class, ['message'=>"Please enter your name"])]
#[Validator('neptun', NotBlank::class, ['message'=>"Please enter your Neptun Code"])]
#[Validator('email', NotBlank::class, ['message'=>"Please enter your email address"])]
#[Validator('programs', NotBlank::class, ['message'=>"Please select a program"])]
#[Validator('mobile', Regex::class, ['pattern'=>"/^[0-9]*$/",'message'=>"Phone Number may only contain numbers"])]
#[Validator('email', Email::class, ['message'=>"Email format is not valid"])]
#[Validator('major', GreaterThan::class, ['value'=>0, 'message'=>"Please select your major!"])]
#[Validator('semester', GreaterThan::class, ['value'=>0, 'message'=>"Please select your semester!"])]
#[Validator(null, UniqueEntity::class, ['fields'=>['neptun']])]
#[Validator(null, UniqueEntity::class, ['fields'=>['email']])]
#[Modelify(\Application\Database\DefaultConnection::class, 'student', true)]
class Student extends _Student{

    public function getQRCode(){
        return "MIK51-student-".$this->id.'-'.md5($this->neptun);
    }
}