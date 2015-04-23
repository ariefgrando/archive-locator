<?php
class MY_Controller extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
		if($this->session->userdata("nama")=="") {
            redirect('user/entrance');
        }else{
			//$this->load->view('home/home');
		}
	}
}

?>

