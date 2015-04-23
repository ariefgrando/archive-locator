<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Auth extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
        
    public function index(){
        // Load the model
        $this->load->model('m_auth');

		$this->load->model('m_application');
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

        // Validate the user can login
        $result = $this->m_auth->validate();
        // Now we verify the result
        if($result==false){
            // If user did not validate, then show them login page again
            $data["msg"] = "<font color=red>Username / Password Salah</font><br />";
			$final = array_merge($data, $all, $file);

			$this->template->load('default','home/register', $final);
            //$this->index($msg);
		}elseif($result=="User sedang aktif !"){
            // If user did not validate, then show them login page again
            $data["msg"] = "<font color=red>User sedang digunakan, harap log out terlebih dahulu</font><br />";
			$final = array_merge($data, $all, $file);

			$this->template->load('default','home/register', $final);
            //$this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
			if($this->session->userdata("hak_akses")=="*"){
				redirect('admin/dashboard');
			}elseif($this->session->userdata("hak_akses")=="1"){
				redirect('user/u_dashboard');
			}
			//$this->load->view('user/entrance');
        }        
    }

    public function logout(){
		$this->load->model('m_auth');
		$result = $this->m_auth->updatelogout();

        $this->session->sess_destroy();
        redirect('user/Entrance');
    }

}
?>