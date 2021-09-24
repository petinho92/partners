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

            $template = file_get_contents(__DIR__ . '/resources/emal_hu_en.html');
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
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            $template = file_get_contents(__DIR__ . '/resources/emal_hu_en.html');
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
            $template = file_get_contents(__DIR__ . '/resources/emal_hu_en.html');
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
            $template = file_get_contents(__DIR__ . '/resources/emal_hu_en.html');
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