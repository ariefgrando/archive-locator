<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Proses extends CI_Controller{
    
    //function __construct(){
    //    parent::__construct();
    //}
        
    public function index(){
		$this->load->model('m_application');
		$all["log"]=$this->m_application->getalllog();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $file);

		if($this->session->userdata("nama")!="") {
			redirect('admin/dashboard');
		}else{
			$this->template->load('default','home/register', $final);
		}
    }

	public function getjurusan(){
		$this->load->model('m_application');
		$jurus=$this->m_application->getjurusan($this->input->post('idtingkat'));
		print_r(json_encode($jurus));
	}

	public function rekamdata(){
		$this->load->model('m_application');
		$all["lemari"]=$this->m_application->getalllemari();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $file);
		if($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/formrekamdata', $final);
		}elseif($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/formrekamdata', $final);
		}
	}

	public function submitnewarsip(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('tanggalsurat', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('perihalsurat', 'Perihal Surat', 'required');
		$this->form_validation->set_rules('lemari', 'Nomor / Kode Lemari', 'required');
		$this->form_validation->set_rules('odner', 'Nomor / Kode Odner', 'required');
		$this->form_validation->set_rules('ketsurat', 'Keterangan Surat', 'required');

		if ($this->form_validation->run() == FALSE){

			$this->rekamdata();
		
		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["newarsip"]=$this->m_application->submitnewarsip();

			$title["judul"]="Status Penambahan Data Arsip Baru";
			$file["archive"]=$this->m_application->getallarchives();


			$final = array_merge($all, $title, $file);

			$this->template->load('authdone','admin/result', $final);
		}


		/*
		$all["lemari"]=$this->m_application->getalllemari();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $file);
		if($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/formrekamdata', $final);
		}elseif($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/formrekamdata', $final);
		}
		*/
	}

	public function getOdner(){
		$this->load->model('m_application');
		$odner=$this->m_application->getallodner($this->input->post('lemari'));
		print_r(json_encode($odner));
	}





	public function submitpindaharsip(){

		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p style=color:red>', '</p>');

		$this->form_validation->set_rules('nosurat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('tanggalsurat', 'Tanggal Surat', 'required');
		$this->form_validation->set_rules('perihalsurat', 'Perihal Surat', 'required');
		$this->form_validation->set_rules('lemari', 'Nomor / Kode Lemari', 'required');
		$this->form_validation->set_rules('odner', 'Nomor / Kode Odner', 'required');
		$this->form_validation->set_rules('ketsurat', 'Keterangan Surat', 'required');

		if ($this->form_validation->run() == FALSE){

			//
			redirect('user/u_dashboard/pindaharsip/'.$this->input->POST('idarsip'));
		
		}elseif ($this->form_validation->run() == TRUE){

			$this->load->model("m_application");
			$all["newarsiploc"]=$this->m_application->submitpindaharsip();

			$title["judul"]="Status Perubahan Data Arsip";
			$file["archive"]=$this->m_application->getallarchives();


			$final = array_merge($all, $title, $file);

			$this->template->load('authdone','admin/result', $final);
		}


		/*
		$all["lemari"]=$this->m_application->getalllemari();
		$file["archive"]=$this->m_application->getallarchives();
		$final = array_merge($all, $file);
		if($this->session->userdata("hak_akses")=="1"){
			$this->template->load('userdone','home/formrekamdata', $final);
		}elseif($this->session->userdata("hak_akses")=="*"){
			$this->template->load('authdone','home/formrekamdata', $final);
		}
		*/
	}

	public function submitdeletearsip(){
		$idarsip= $this->input->POST('idarsip');
		$this->load->model("m_application");
		if($this->m_application->submitdeletearsip($idarsip)){
			echo "<script>alert('Arsip berhasil dihapus dari Sistem !')</script>";
			redirect('user/U_Dashboard/archives');
		}else{
			echo "<script>alert('Arsip gagal dihapus dari Sistem !')</script>";
			redirect("user/u_dashboard/hapusarsip/".$idarsip."");
		}
	}

	public function findarsip(){
		$kriteria= $this->input->POST('kriteria');
		$data= $this->input->POST('data');

		$this->load->model("m_application");
		$result_lookup=$this->m_application->resultfindarsip($kriteria, $data);
		print_r(json_encode($result_lookup));
	}

}
?>