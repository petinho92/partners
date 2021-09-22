<?php namespace Application\Missions\Web\Services;

use Application\Entity\Chamber;
use Application\Entity\Guest;
use Application\Entity\Instructor;
use Application\Entity\Student;
use Application\Entity\Emailsender;


class EmailService{

    /**
     * @throws \Atomino\Carbon\ValidationError
     */
    public function create($cast)
    {
        if ($cast instanceof Student) {
            $type = "student";
            $dictionary = [
                '{{name}}' => $cast->name,
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            if($cast->lang === 'hu') {
                $template = file_get_contents(__DIR__ . '/resources/student_email_hu.html');
            }else if($cast->lang === 'en'){
                $template = file_get_contents(__DIR__ . '/resources/student_email_en.html');
            }
            $content = strtr($template, $dictionary);

            $email = Emailsender::create();

                $email->toName = $cast->name;
                $email->toEmail = $cast->email;
                $email->toQr = $cast->getQRCode();
                $email->statusSent = false;
                $email->toContent = $content;
                $email->lang = $cast->lang;
                $email->cast = $type;
                $email->save();

        }
        if($cast instanceof Instructor){
            $type = "instructor";
            $dictionary = [
                '{{name}}' => $cast->name,
                '{{organisation}}' => $cast->organisation,
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            if($cast->lang === 'hu') {
                $template = file_get_contents(__DIR__ . '/resources/instructor_email_hu.html');
            }else if($cast->lang === 'en'){
                $template = file_get_contents(__DIR__ . '/resources/instructor_email_en.html');
            }
            $content = strtr($template, $dictionary);

            $email = Emailsender::create();

            $email->toName = $cast->name;
            $email->toEmail = $cast->email;
            $email->toQr = $cast->getQRCode();
            $email->statusSent = false;
            $email->toContent = $content;
            $email->lang = $cast->lang;
            $email->cast = $type;
            $email->save();
        }
        if($cast instanceof Chamber){
            $type = "chamber";
            $dictionary = [
                '{{name}}' => $cast->name,
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            if($cast->lang === 'hu') {
                $template = file_get_contents(__DIR__ . '/resources/chamber_email_hu.html');
            }else if($cast->lang === 'en'){
                $template = file_get_contents(__DIR__ . '/resources/chamber_email_en.html');
            }
            $content = strtr($template, $dictionary);

            $email = Emailsender::create();

            $email->toName = $cast->name;
            $email->toEmail = $cast->email;
            $email->toQr = $cast->getQRCode();
            $email->statusSent = false;
            $email->toContent = $content;
            $email->lang = $cast->lang;
            $email->cast = $type;
            $email->save();
        }
        if($cast instanceof Guest){
            $type = "guest";
            $dictionary = [
                '{{name}}' => $cast->name,
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            if($cast->lang === 'hu') {
                $template = file_get_contents(__DIR__ . '/resources/guest_email_hu.html');
            }else if($cast->lang === 'en'){
                $template = file_get_contents(__DIR__ . '/resources/guest_email_en.html');
            }
            $content = strtr($template, $dictionary);

            $email = Emailsender::create();

            $email->toName = $cast->name;
            $email->toEmail = $cast->email;
            $email->toQr = $cast->getQRCode();
            $email->statusSent = false;
            $email->toContent = $content;
            $email->lang = $cast->lang;
            $email->cast = $type;
            $email->save();

        }

    }


}