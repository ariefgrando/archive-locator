<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class U_Dashboard extends MY_Controller{
    
    function __construct(){
        parent::__construct();
    }
        
    public function index(){
		$this->load->model('m_application');
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$final = array_merge($all, $file);

		//$all["group"]=$this->m_application->group_pelamar();
		//$this->template->load('formlogin','home/admin_menu', $all);
		$this->template->load('userdone','home/user_menu', $final);
	}

    public function archives(){

		/*
		$this->load->model('m_application');
		$this->load->library('pagination');

		$config = array();
		$config["base_url"] = base_url() . "user/U_Dashboard/archives";
		$total_row = $this->m_application->record_archives_count();
		$config["total_rows"] = $total_row;
		$config["per_page"] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = $total_row;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

		$this->pagination->initialize($config);
		//$this->pagination->create_links();
		if($this->uri->segment(4)){
			$page = ($this->uri->segment(4)) ;
		}else{
			$page = 1;
		}
		$data["results"] = $this->m_application->fetch_data_archives($config["per_page"], $page);
		//$data["results2"] = $this->m_application->fetch_alldata_archives($config["per_page"], $page);
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$final = array_merge($data, $all, $file);
		//print_r($data);
		*/

		$data['base']=$this->config->item('base_url');
        $data['title']= 'Message form';
        $this->load->model('m_application');

        $total=$this->m_application->message_count();
        $per_pg=5;
        $offset=$this->uri->segment(4);

        $this->load->library('pagination');
        $config['base_url'] = $data['base'].'/user/U_Dashboard/archives';
        $config['total_rows'] = $total;
        $config['per_page'] = $per_pg;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';

        $this->pagination->initialize($config);
        //$data['pagination']=$this->pagination->create_links();
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );

        $data['query']=$this->m_application->get_all($per_pg,$offset);
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$final = array_merge($data, $all, $file);
		
		if($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/daftararsip', $final);
		}elseif($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/daftararsip', $final);
		}
	}

    public function pindaharsip(){
		
        $idarsip=$this->uri->segment(4);
		$this->load->model('m_application');
		$data['query']=$this->m_application->get_arsip($idarsip);
		$cabinet["lemari"]=$this->m_application->getalllemari();
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($data, $all, $file, $cabinet);
		
		if($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/formpindaharsip', $final);
		}elseif($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/formpindaharsip', $final);
		}

	}

    public function hapusarsip(){
		
        $idarsip=$this->uri->segment(4);
		$this->load->model('m_application');
		$data['query']=$this->m_application->get_arsip($idarsip);
		$cabinet["lemari"]=$this->m_application->getalllemari();
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($data, $all, $file, $cabinet);
		
		if($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/formhapusarsip', $final);
		}elseif($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/formhapusarsip', $final);
		}

	}

}
?>