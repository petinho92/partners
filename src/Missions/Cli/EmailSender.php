<?php namespace Application\Missions\Cli;

use Atomino\Carbon\Database\Finder\Filter;
use Atomino\Core\Cli\Attributes\Command;
use Atomino\Core\Cli\CliCommand;
use Atomino\Core\Cli\CliModule;
use Atomino\Core\Cli\Style;
use PHPMailer\PHPMailer\PHPMailer;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Output\Output;
use function Atomino\debug;

class EmailSender extends CliModule
{
    /**
     * @throws \PHPMailer\PHPMailer\Exception
     */
    #[Command('email')]
    public function sendEmail(CliCommand $command)
    {
        $command->define(function (Input $input, Output $output, Style $style) {
            $file = 'working.txt';

            if (!is_file($file)) {
                try {
                    file_put_contents($file, "");
                    $data = \Application\Entity\Emailsender::search(Filter::where(\Application\Entity\Emailsender::statusSent(false)))->collect();
                    debug($data);
                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->isHTML();
                    $mail->SMTPDebug = 0;
                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->Host = gethostbyname('smtp.mik.pte.hu');
                    $mail->Port = 25;
                    $mail->SMTPAuth = false;
                    $mail->SMTPAutoTLS = false;
                    $mail->CharSet = 'UTF-8';


                    foreach ($data as $email) {
                        $mail->clearAddresses();
                        $mail->addAddress($email->toEmail, $email->toName);
//                        $mail->addAddress('petinho92@gmail.com', $email->toName);
                        $mail->msgHTML($email->toContent);
                        if ($email->lang == 'hu')
                        {
                            $mail->setFrom('noreply@mik.pte.hu', 'MIK Partners regisztráció');
                            $mail->Subject = 'Sikeres regisztráció';
                            $mail->AltBody = 'MIK Partners Regisztráció';
                        }else if($email->lang='en')
                        {
                            $mail->setFrom('noreply@mik.pte.hu', 'MIK Partners registration');
                            $mail->Subject = 'Successful registration!';
                            $mail->AltBody = 'MIK Partners registration';
                        }


                        if (!$mail->send()) {
                            debug('Mailer Error: ' . $mail->ErrorInfo);
                        } else {
                            debug('Message sent!');
                            $mail->SmtpClose();
                            $email->statusSent = true;
                            $email->sentTime = new \DateTime();
                            $email->save();
                        }
                    }

                } catch (\Exception $e) {
                    debug($e);
                } finally {
                    unlink($file);
                }
            }
        });
    }
}
