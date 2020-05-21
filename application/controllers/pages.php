<?php

class Pages extends CI_Controller{
	public function view($page = 'home'){
		if(! file_exists('application/views/pages/'.$page.'.php')){
			// no page
			show_404();
		}

		$data['title'] = ucfirst($page); // 第一個字母大寫

		$this->load->view('template/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer', $data);
	}
}

?>