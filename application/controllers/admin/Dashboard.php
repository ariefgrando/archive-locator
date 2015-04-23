<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Dashboard extends MY_Controller{
    
    function __construct(){
        parent::__construct();
    }
        
    public function index(){
		$this->load->model('m_application');
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();
		$odner["odner"]=$this->m_application->getallodner();

		$final = array_merge($all, $file, $odner);

		//$all["group"]=$this->m_application->group_pelamar();
		//$this->template->load('formlogin','home/admin_menu', $all);
		$this->template->load('authdone','home/admin_menu', $final);
	}

	/*
    public function export_to_excel(){
        $this->load->library("excel");
        $this->load->model("m_application");
        $this->excel->setActiveSheetIndex(0);
        $data = $this->m_application->getallpelamar();
		$tgl = date('Y-m-d');
        $this->excel->stream("allpelamar-".$tgl.".xls", $data);
	}*/

    public function newwardrobe(){
		$this->load->model('m_application');
		$file["archive"]=$this->m_application->getallarchives();

		$this->template->load('authdone','admin/newlemari', $file);
	}

    public function newuser(){
		$this->load->model('m_application');
		$file["archive"]=$this->m_application->getallarchives();

		$this->template->load('authdone','admin/newuser', $file);
	}

    public function wardrobe(){
		//$this->load->model('m_application');
		//$file["archive"]=$this->m_application->getallarchives();

		//$this->template->load('authdone','admin/listlemari', $file);

		$data['base']=$this->config->item('base_url');
        $data['title']= 'Message form';
        $this->load->model('m_application');

        $total=$this->m_application->message_count("lemari");
        $per_pg=2;
        $offset=$this->uri->segment(4);

        $this->load->library('pagination');
        $config['base_url'] = $data['base'].'/admin/dashboard/wardrobe';
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

        $data['query']=$this->m_application->getalllemari($per_pg,$offset);
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$final = array_merge($data, $all, $file);
		
		if($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','admin/listlemari', $final);
		}//elseif($this->session->userdata("hak_akses")=="1"){
			//$this->template->load('userdone','home/daftararsip', $final);
		//}
	}

    public function newodner(){
		$this->load->model('m_application');
		$all["lemari"]=$this->m_application->getalllemari();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $file);

		$this->template->load('authdone','admin/newodner', $final);
	}

    public function submitnewlemari(){


		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('kodelemari', 'Nomor / Kode Lemari', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->newwardrobe();
		
		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["newlemari"]=$this->m_application->submitnewlemari();
			$file["archive"]=$this->m_application->getallarchives();
			$title["judul"]="Status Penambahan Data Lemari Baru";
			$final = array_merge($all,$file, $title);
			$this->template->load('authdone','admin/result', $final);
		}
	}

    public function submitnewodner(){


		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('kodeodner', 'Nomor / Kode Odner', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->newodner();
		
		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["newodner"]=$this->m_application->submitnewodner();

			$title["judul"]="Status Penambahan Data Odner Baru";

			$file["archive"]=$this->m_application->getallarchives();


			$final = array_merge($all, $title, $file);
			$this->template->load('authdone','admin/result', $final);
		}
	}

    public function submitnewuser(){


		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->newuser();
		
		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["newuser"]=$this->m_application->submitnewuser();

			$title["judul"]="Status Penambahan Data User Baru";
			$file["archive"]=$this->m_application->getallarchives();


			$final = array_merge($all, $title, $file);

			$this->template->load('authdone','admin/result', $final);
		}
	}

	public function updatewardrobe(){
		$idlemari=$this->uri->segment(4);
		$this->load->model("m_application");
		$all["lemari"]=$this->m_application->getparticularwardrobe($idlemari);
		$title["judul"]="Update Data Lemari";
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $title, $file);
		$this->template->load('authdone','admin/formupdatelemari', $final);
	}

	public function updatedatalemari(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('kodelemari', 'Kode Lemari', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == FALSE){

			//$this->wardrobe();
			redirect('admin/dashboard/updatewardrobe/'.$this->input->POST('idlemari'));

		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["updatelemari"]=$this->m_application->doupdatelemari();
			$title["judul"]="Status Perubahan Data Lemari";
			$file["archive"]=$this->m_application->getallarchives();
			$final = array_merge($all, $title, $file);

			$this->template->load('authdone','admin/result', $final);
		}
	}

	public function deletewardrobe(){
		$idlemari=$this->uri->segment(4);
		$this->load->model("m_application");

		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();

		$res["data"]=$this->m_application->cekbeforedel($idlemari);

		//print_r( $res["data"]);

		
		if(!empty($res["data"])){

			$final = array_merge($res, $all, $file);
			if($this->session->userdata("hak_akses")=="*"){
				$this->template->load('authdone','home/form_listarsip_before_delwardrobe', $final);
			}elseif($this->session->userdata("hak_akses")=="1"){
				$this->template->load('userdone','home/form_listarsip_before_delwardrobe', $final);
			}
		}else{
			$result["data"]=$this->m_application->getparticularwardrobe($idlemari);
			$final = array_merge($result, $all, $file);
			$this->template->load('authdone','home/formhapuslemari', $final);
		}
	}

	public function submitdeletelemari(){
		$idlemari= $this->input->POST('idlemari');
		$this->load->model("m_application");
		if($this->m_application->dosubmitdeletelemari($idlemari)){
			echo "<script>alert('Data lemari berhasil dihapus dari Sistem !')</script>";
			redirect('admin/dashboard/wardrobe');
		}else{
			echo "<script>alert('Data lemari gagal dihapus dari Sistem !')</script>";
			redirect("admin/dashboard/deletewardrobe/".$idlemari."");
		}
	}

}
?>