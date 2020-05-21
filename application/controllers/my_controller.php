<?php

if(! defined('BASEPATH')) exit('No direct script access');

class My_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('My_PHPMailer');
	}

	public function send_mail(){
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth		= true;
		$mail->SMTPSecure	= 'ssl';
		$mail->Host 		= 'smtp.gmail.com';
		$mail->Port 		= '465';
		$mail->Username 	= 'service@msbt.com.tw';
		$mail->Password 	= 'msbt034880250msbt';
		$mail->Subject 		= '標題';
		$mail->Body 		= '你做的很棒噢！';
		if(! $mail->Send()){
			$data['message'] = 'Error:'.$mail->ErrorInfo;
		}else{
			$data['message'] = 'Message send correctly';
		}

		$this->load->view('sent_mail',$data);
	}
}
?>

