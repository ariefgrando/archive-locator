<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Entrance extends CI_Controller{
    
    //function __construct(){
    //    parent::__construct();
    //}
        
    public function index(){
		$this->load->model('m_application');
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$final = array_merge($all, $file);

		if($this->session->userdata("hak_akses")=="*") {
			redirect('admin/dashboard');
		}elseif($this->session->userdata("hak_akses")=="1") {
			redirect('user/u_dashboard');
		}else{
			$this->template->load('default','home/register', $final);
		}
    }


}
?>