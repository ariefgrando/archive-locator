<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_application extends CI_Model{

/*
	// get agama
	public function getagama(){
		$this->db->select('*');
		$this->db->from('agama');
		$this->db->where('STATUS', 'OK'); 
		$query = $this->db->get();
		return $query->result();
	}

	// get agama
	public function gettingkat(){
		$this->db->select('*');
		$this->db->from('tingkat_pendidikan');
		$this->db->where('status', 'ok'); 
		$query = $this->db->get();
		return $query->result();
	}

	//get jurusan
	public function getjurusan($tingkat){
		$this->db->select('*');
		$this->db->from('jurusan');
		$this->db->where('tingkat', $tingkat); 
		$this->db->where('status', 'ok');
		$query = $this->db->get();
		return $query->result();
	}

	// Submit User
	public function submitUser(){
		
		$err1="";

		$querycekktpexist=$this->db->query("select * from applicant where ktp = '".$this->input->POST('ktp')."'");
		$ktpexist = $querycekktpexist->result();
		if(!empty($ktpexist)){
			$datasent=array('nama'=>$ktpexist[0]->nama,'alamat'=>$ktpexist[0]->alktp, 'err'=>true, 'ktp'=>$ktpexist[0]->ktp);
			return $datasent;
		}else{

			if($this->input->POST('agama')=='0' || $this->input->POST('tanggallahir')=='0' || $this->input->POST('bulanlahir')==0 || $this->input->POST('tahunlahir')=='0'){
				$err1.="Data belum lengkap diisi !";
			}else{

				$query=$this->db->query("select distinct(id) from applicant order by id desc");
				$idterakhir = $query->result();
				if(empty($idterakhir)){
					$newid = 1;
				}else{
					$newid = $idterakhir[0]->id + 1;
				}



					$elarray =	array(
							'id'		=> $newid,
							'ktp'		=> $this->input->POST('ktp'),
							'nama'		=> $this->input->POST('name'),
							'tmplahir'	=> $this->input->POST('tempatlahir'),
							'tgllahir'	=> $this->input->POST('tanggallahir'),
							'blnlahir'	=> $this->input->POST('bulanlahir'),
							'thnlahir'	=> $this->input->POST('tahunlahir'),
							'alktp'		=> $this->input->POST('alamatktp'),
							'alsurat'	=> '',
							'notelp'	=> '',
							'nohp'		=> $this->input->POST('hp'),
							'pos'		=> $this->input->POST('pos'),
							'email'		=> $this->input->POST('email'),
							'kotaktp'	=> $this->input->POST('kotaktp'),
							'sex'		=> $this->input->POST('jk'),
							'agama'		=> $this->input->POST('agama'),
							'level'		=> $this->input->POST('tingkatpendidikan'),
							'jur'		=> $this->input->POST('jurusan'),
							'kons'		=>'',
							'gelar'		=>'',
							'univ'		=> $this->input->POST('kampus'),
							'ipk'		=> $this->input->POST('ipk'),
							'thnmasuk'	=>'',
							'thnlulus'	=>'',
							'baju'		=>'',
							'celana'	=>'',
							'sepatu'	=>'',
							'ket'		=>'',
							'berkas'	=>'',
							'tglinput'	=>date("Y-m-d H:i:s")
							);
					$data[] = $elarray;

				if($this->db->insert_batch('applicant', $data)){
					//$err1.="";
					$datasent=array('nama'=>$this->input->POST('name'),'nomap'=>$newid);
				}else{
					$err1.="Gagal menyimpan data pelamar !";
				}

			}

			if(!empty($err1)){
				return false;
			}else{
				//$datasent=array('nama'=>$this->input->POST('name'),'nomap'=>$newid);
				return $datasent;
			}
		}
	}


	public function getallpelamar(){
		$q_allpelamar=$this->db->query("SELECT a.`id`,a.`ktp`,a.`nama`,a.`tmplahir`,a.`tgllahir`,a.`blnlahir`,a.`thnlahir`,a.`alktp`,a.`nohp`,a.`pos`,a.`email`,a.`kotaktp`,a.`sex`,b.`keterangan` as agama,c.`tingkat` as tingkat_pendidikan,d.`jurusan`, d.kode, a.`univ`,a.`ipk`,a.`tglinput` from applicant a, agama b, tingkat_pendidikan c, jurusan d where a.agama = b.id and a.level = c.id and a.jur = d.id order by a.id asc");
		$allpelamar = $q_allpelamar->result();

		return $allpelamar;

	}

	public function group_pelamar(){
		$q_group=$this->db->query("SELECT b.tingkat, count(*) as total FROM `applicant` a, tingkat_pendidikan b WHERE a.level = b.id group by a.level");
		$gpelamar = $q_group->result();

		return $gpelamar;
	}

	//SELECT a.`id`,a.`ktp`,a.`nama`,a.`tmplahir`,a.`tgllahir`,a.`blnlahir`,a.`thnlahir`,a.`alktp`,a.`nohp`,a.`pos`,a.`email`,a.`kotaktp`,a.`sex`,b.`keterangan` as agama,c.`tingkat` as tingkat_pendidikan,d.`jurusan`, d.kode, a.`univ`,a.`ipk`,a.`tglinput` from applicant a, agama b, tingkat_pendidikan c, jurusan d where a.agama = b.id and a.level = c.id and a.jur = d.id order by a.id asc
*/

	public function getallodner($lemari=null){
		if($lemari==null){
			$q_odner = $this->db->query("SELECT a.id, b.no_lemari,a.no_odner, a.keterangan FROM `odner` a, lemari b WHERE a.no_lemari = b.id");
		}else{
			$q_odner = $this->db->query("SELECT a.id, b.no_lemari,a.no_odner, a.keterangan FROM `odner` a, lemari b WHERE a.no_lemari = b.id and a.no_lemari = '".$lemari."'");
		}
		$odner = $q_odner->result();

		return $odner;
	}

	public function getallarchives(){
		$q_group=$this->db->query("SELECT count(*) as totalarsip from arsip");
		$arsip = $q_group->result();

		return $arsip;
	}

	public function getalllog(){
		$q_group=$this->db->query("SELECT * from log order by id DESC");
		$log = $q_group->result();

		return $log;
	}

	public function getalllemari($per_pg=null,$offset=null){


		if($per_pg!=null && $offset !=null){
			$q_group=$this->db->query("SELECT * from lemari order by id ASC LIMIT ".$per_pg." OFFSET ".$offset);
		}elseif($per_pg!=null && $offset ==""){
			$offset=0;
			$q_group=$this->db->query("SELECT * from lemari order by id ASC LIMIT ".$per_pg." OFFSET ".$offset);
		}else{
			$q_group=$this->db->query("SELECT * from lemari order by id ASC");
		}

		$lemari = $q_group->result();

		return $lemari;
	}

	public function submitnewlemari(){

		$err="";

		$querycekexist=$this->db->query("select * from lemari where no_lemari = '".$this->input->POST('kodelemari')."'");
		$exist = $querycekexist->result();
		if(!empty($exist)){

			$err.="Nomor / Kode Lemari ".$this->input->POST('kodelemari')." sudah digunakan !";	

		}else{


			$elarray =	array(
							'id'		=> '',
							'no_lemari'		=> $this->input->POST('kodelemari'),
							'keterangan'	=> $this->input->POST('keterangan')
							);
					$data[] = $elarray;
			if($this->db->insert_batch('lemari', $data)){
				$datasent=array('kodelemari'=>$this->input->POST('kodelemari'));

					// Simpan log
					date_default_timezone_set('Asia/Jakarta');
					$datalog = array(
						'id' => '',
						'proses' => 'New Lemari',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data2[] = $datalog;

					$this->db->insert_batch('log', $data2);

			}else{
				$err.="Data lemari gagal disimpan !";	
			}

		}

				if(!empty($err)){
					return $err;
				}else{
					return $datasent;
				}

	}

	// Submit New Odner
	public function submitnewodner(){

		$err="";

		$querycekexist=$this->db->query("select * from odner where no_odner = '".$this->input->POST('kodeodner')."'");
		$exist = $querycekexist->result();
		if(!empty($exist)){

			$err.="Nomor / Kode Odner ".$this->input->POST('kodeodner')." sudah digunakan !";	

		}else{


			$elarray =	array(
							'id'		=> '',
							'no_lemari'		=> $this->input->POST('kdlemari'),
							'no_odner'		=> $this->input->POST('kodeodner'),
							'keterangan'	=> $this->input->POST('keterangan')
							);
			$data[] = $elarray;
			if($this->db->insert_batch('odner', $data)){
				$datasent=array('kodeodner'=>$this->input->POST('kodeodner'));

					// Simpan log
					date_default_timezone_set('Asia/Jakarta');
					$datalog = array(
						'id' => '',
						'proses' => 'New Odner',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data2[] = $datalog;

					$this->db->insert_batch('log', $data2);

			}else{
				$err.="Data Odner gagal disimpan !";	
			}

		}

				if(!empty($err)){
					return $err;
				}else{
					return $datasent;
				}

	}

	// Submit New User
	public function submitnewuser(){

		$err="";

		$querycekexist=$this->db->query("select * from user where username = '".$this->input->POST('username')."'");
		$exist = $querycekexist->result();
		if(!empty($exist)){

			$err.="Username ".$this->input->POST('username')." sudah digunakan !";	

		}else{


			$elarray =	array(
							'id'			=> '',
							'username'		=>	$this->input->POST('username'),
							'password'		=>	md5($this->input->POST('password')),
							'nama'			=>	$this->input->POST('nama'),
							'hak_akses'		=>	$this->input->POST('hakakses'),
							'status'		=>	'OFFLINE',
							'last_access'	=>	''
							);
			$data[] = $elarray;
			if($this->db->insert_batch('user', $data)){
				$datasent=array('username'=>$this->input->POST('username'));

					// Simpan log
					date_default_timezone_set('Asia/Jakarta');
					$datalog = array(
						'id' => '',
						'proses' => 'New User',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data2[] = $datalog;

					$this->db->insert_batch('log', $data2);

			}else{
				$err.="Data User Baru gagal disimpan !";	
			}

		}

				if(!empty($err)){
					return $err;
				}else{
					return $datasent;
				}

	}

	//submitnewarsip
	public function submitnewarsip(){

		$err="";

		$querycekexist=$this->db->query("select * from arsip where no_surat = '".$this->input->POST('nosurat')."'");
		$exist = $querycekexist->result();
		if(!empty($exist)){

			$err.="Arsip dengan No.".$this->input->POST('nosurat')." sudah didaftarkan !";	

		}else{


			$elarray =	array(
							'id'			=> '',
							'no_surat'		=>	$this->input->POST('nosurat'),
							'tgl_surat'		=>	$this->input->POST('tanggalsurat'),
							'perihal_surat'	=>	$this->input->POST('perihalsurat'),
							'odner'			=>	$this->input->POST('odner'),
							'keterangan'	=>	$this->input->POST('ketsurat')
							);
			$data[] = $elarray;
			if($this->db->insert_batch('arsip', $data)){
				$datasent=array('no_surat'=>$this->input->POST('nosurat'));

					// Simpan log
					date_default_timezone_set('Asia/Jakarta');
					$datalog = array(
						'id' => '',
						'proses' => 'New Archive',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data2[] = $datalog;

					$this->db->insert_batch('log', $data2);

			}else{
				$err.="Data Arsip Baru gagal disimpan !";	
			}

		}

				if(!empty($err)){
					return $err;
				}else{
					return $datasent;
				}

	}

	/*
	public function record_archives_count(){
		return $this->db->count_all("arsip");
	}
*/
	public function get_arsip($id){
		$query=$this->db->query("SELECT a.id, a.no_surat, a.tgl_surat, a.perihal_surat, a.keterangan, b.no_lemari, b.no_odner FROM `odner` b, arsip a WHERE a.odner = b.id and a.id = '".$id."'");
		//$this->db->where('id', $id);
		//$query = $this->db->get("arsip");
		return $query->result();
	}
	
	public function get_all($per_pg,$offset)
    {
			if($offset==""){
				$offset=0;
			}
		$query=$this->db->query("select
								a.id, 
								a.no_surat,
								a.tgl_surat,
								a.perihal_surat,
								b.no_lemari,
								b.no_odner
								from arsip a,
								odner b
								where a.odner = b.id LIMIT ".$per_pg." OFFSET ".$offset);

		
		//$this->db->order_by('id','asc');
        //$query=$this->db->get('arsip',$per_pg,$offset);
        return $query->result();
    }

    public function message_count($table=null)
    {
		if($table==null){
			return $this->db->count_all('arsip');
		}else{
			return $this->db->count_all($table);
		}
    }



	public function submitpindaharsip(){
		$elarray =	array(
						'no_surat'		=>	$this->input->POST('nosurat'),
						'tgl_surat'		=>	$this->input->POST('tanggalsurat'),
						'perihal_surat'	=>	$this->input->POST('perihalsurat'),
						'odner'			=>	$this->input->POST('odner'),
						'keterangan'	=>	$this->input->POST('ketsurat')
						);

		$this->db->where('id', $this->input->POST('idarsip'));
		if($this->db->update('arsip', $elarray)){

						$q_odner = $this->db->query("SELECT * FROM odner WHERE id = '".$this->input->POST('odner')."'");
						$odner = $q_odner->result();

						//return $odner;


				$datasent=array('no_surat'=>$this->input->POST('nosurat'),'odner'=>$odner[0]->no_odner);

				// Simpan log
				date_default_timezone_set('Asia/Jakarta');
				$datalog = array(
					'id' => '',
					'proses' => 'Update Archive Location',
					'tanggal' => date("Y-m-d H:i:s"),
					'user'	=> $this->session->userdata("nama")
				);
				$data2[] = $datalog;

				$this->db->insert_batch('log', $data2);

				return $datasent;

		}else{
			return false;
		}
	}

	public function submitdeletearsip($id){
		if($this->db->delete('arsip', array('id' => $id))){

				// Simpan log
				date_default_timezone_set('Asia/Jakarta');
				$datalog = array(
					'id' => '',
					'proses' => 'Delete Archive',
					'tanggal' => date("Y-m-d H:i:s"),
					'user'	=> $this->session->userdata("nama")
				);
				$data2[] = $datalog;

				$this->db->insert_batch('log', $data2);

			return true;
		}else{
			return false;
		}
	}

	public function dosubmitdeletelemari($id){
		if($this->db->delete('lemari', array('id' => $id))){
				if($this->db->delete('odner', array('no_lemari' => $id))){


					// Simpan log
					date_default_timezone_set('Asia/Jakarta');
					$datalog1 = array(
						'id' => '',
						'proses' => 'Delete Odner from lemari',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data2[] = $datalog1;

					$this->db->insert_batch('log', $data2);

					// Simpan log
					$datalog2 = array(
						'id' => '',
						'proses' => 'Delete lemari after odner',
						'tanggal' => date("Y-m-d H:i:s"),
						'user'	=> $this->session->userdata("nama")
					);
					$data3[] = $datalog2;

					$this->db->insert_batch('log', $data3);
					
				}
			return true;
			
		}else{
			return false;
		}
	}

	public function resultfindarsip($kriteria, $data){
		if($kriteria=="no_surat" || $kriteria=="perihal_surat" || $kriteria=="keterangan"){
			$query=$this->db->query("SELECT a.id, a.no_surat, a.tgl_surat, a.perihal_surat, b.no_lemari, b.no_odner, b.keterangan as keterangan_lokasi , a.keterangan FROM `arsip` a, odner b WHERE a.odner = b.id and a.".$kriteria." like '%".$data."%'");
		}else{
			$query=$this->db->query("SELECT a.id, a.no_surat, a.tgl_surat, a.perihal_surat, b.no_lemari, b.no_odner, b.keterangan as keterangan_lokasi , a.keterangan FROM `arsip` a, odner b WHERE a.odner = b.id and a.".$kriteria." = '".$data."'");
		}
			
			return $query->result();
	}

	public function getparticularwardrobe($wardrobe){
		$q_lemari = $this->db->query("SELECT * FROM lemari WHERE id = '".$wardrobe."'");
		$lemari = $q_lemari->result();

		return $lemari;
	}

	public function doupdatelemari(){
		$err="";
		$elarray =	array(
						'no_lemari'		=>	$this->input->POST('kodelemari'),
						'keterangan'	=>	$this->input->POST('keterangan')
						);

		$this->db->where('id', $this->input->POST('idlemari'));
		if($this->db->update('lemari', $elarray)){

				$datasent=array('no_lemari'=>$this->input->POST('kodelemari'));

				// Simpan log
				date_default_timezone_set('Asia/Jakarta');
				$datalog = array(
					'id' => '',
					'proses' => 'Update Data Lemari',
					'tanggal' => date("Y-m-d H:i:s"),
					'user'	=> $this->session->userdata("nama")
				);
				$data2[] = $datalog;

				$this->db->insert_batch('log', $data2);

				return $datasent;
			
		}else{
	
				$err.="Perubahan data lemari gagal disimpan !";	
				return $err;

		}
	}

	public function cekbeforedel($idobject){
		$q_object = $this->db->query("SELECT a.id as id_arsip, a.no_surat, a.tgl_surat, a.perihal_surat, a.odner as id_odner,o.no_odner, l.id as id_lemari, l.no_lemari, l.keterangan from arsip a, odner o, lemari l where a.odner = o.id and o.no_lemari = l.id");
		$retobject = $q_object->result();

		$data=array();

		for($i=0; $i<count($retobject); $i++){
			if($retobject[$i]->id_lemari == $idobject){
				array_push($data,$retobject[$i]);
			}
		}

		return $data;
	}
	//SELECT a.id as id_arsip, a.no_surat, a.tgl_surat, a.perihal_surat, a.odner as id_odner,o.no_odner, l.id as id_lemari, l.no_lemari, l.keterangan from arsip a, odner o, lemari l where a.odner = o.id and o.no_lemari = l.id

}



?>
