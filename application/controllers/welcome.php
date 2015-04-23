<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		if($this->session->userdata("fname")!="") {
            $this->load->view('home/login');
        }else{
			redirect('user/entrance');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome */