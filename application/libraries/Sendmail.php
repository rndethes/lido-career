<?php

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Sendmail
{
    /**
     * @var array
     */
    protected $config = [];

    /**
     * @var PHPMailer
     */
    protected $phpmailer = null;

    /**
     * @var string
     */
    protected $templateBaseDir = VIEWPATH . 'mail';

    public function __construct(array $config = array())
    {
        $this->config = array_merge(require APPPATH . 'config/mail.php', $config);

        if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            require APPPATH . 'third_party/phpmailer/src/Exception.php';
            require APPPATH . 'third_party/phpmailer/src/PHPMailer.php';
            require APPPATH . 'third_party/phpmailer/src/SMTP.php';
        }

        $this->configure();
    }

    public function forApplyCandidate($candidate, $laporan, $state)
    {
        $CI =& get_instance();

        if ($candidate == null || $laporan == null) {
            return false;
        }

        $template = $CI->load->view('mail/candidate_state', [
            'lamaran' => $laporan,
            'state'   => $state
        ], true);

        return $this->send($candidate['email_candidate'], $candidate['name_candidate'], 'Lido Career Center', $template);
    }

    protected function configure()
    {
         $this->phpmailer = new PHPMailer(true);
      
         $this->phpmailer->IsSMTP();
         $this->phpmailer->SMTPAuth   = true;
         $this->phpmailer->Host       = 'smtp.ethes.my.id';
         $this->phpmailer->Username   = 'lidocareer@ethes.my.id';                     //SMTP username
         $this->phpmailer->Password   = 'Lido@2023';

         $this->phpmailer->SMTPSecure = 'ssl';
         $this->phpmailer->Port = 465;
      
         $this->phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    }

    /**
     * Send Email
     *
     * @param string $to
     * @param string $name
     * @param string $subject
     * @param string $content
     * @param mixed $attachment
     *
     * @return bool
     */
    protected function send(string $to, string $name, string $subject, string $content, $attachment = null)
    {
        $this->phpmailer->Subject = $subject;
        $this->phpmailer->msgHTML($content);
        $this->phpmailer->addAddress($to, $name);

        if ($attachment) {
            $this->phpmailer->addAttachment($attachment);
        }
		 ob_start();
      	 $this->phpmailer->send();
      	 ob_get_clean();
         return true; 
    }

    public function sendActivated($token, $type, $email, $allname)
    {
        if ($type == 'verify') {
            $CI = &get_instance();

            $link = site_url('candidatelogin/verify?email=' . $email . '&token=' . urlencode($token));

            $template = $CI->load->view('mail/verify', [
                'link'  => $link
            ], true);
          
          	 ob_start();
            $this->phpmailer->setFrom('lidocareer@ethes.my.id', 'Account Verification');
            $this->send($email, $allname, 'Account Verification', $template);
            ob_get_clean();
            return true; 

           
        } elseif ($type == 'forgot') {
            $CI = &get_instance();

            $link = site_url('candidatelogin/resetpassword?email=' . $email . '&token=' . urlencode($token));

            $template = $CI->load->view('mail/reset', [
                'link'  => $link
            ], true);
          
          	 ob_start();
             $this->phpmailer->setFrom('lidocareer@ethes.my.id', 'Reset Password');
        	 $this->send($email, $allname, 'Reset Password', $template);
             ob_get_clean();
             return true; 

        }

        $this->phpmailer->addAddress($email, $allname);

        if ($this->phpmailer->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}