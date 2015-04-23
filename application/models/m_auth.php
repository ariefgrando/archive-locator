<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class M_Auth extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        


		$query1=$this->db->query("SELECT * FROM `user` WHERE username = '".$username."' and password = '".md5($password)."'");


		$query = $query1->result();
        // Prep the query
        //$this->db->where('username', $username);
        //$this->db->where('password', md5($password));
        
        // Run the query
        //$query = $this->db->get('user');
        // Let's check if there are any results
		//print_r($query);
		

			if(count($query) == 1)
			{
				if($query[0]->status=='ONLINE' && $query[0]->nama=='Administrator'){
					$err="User sedang aktif !";
					return $err;

				}else{
					foreach($query as $row){

					$data = array(
							'id' => $row->id,
							'nama' => $row->nama,
							'lastaccess' => $row->last_access,
							'hak_akses' => $row->hak_akses
							);

					}
					
					date_default_timezone_set('Asia/Jakarta');
					$datalog = array(
						'status' => "ONLINE",
					   'last_access' => date("Y-m-d H:i:s")
					);

					$this->db->where('id', $row->id);
					$this->db->update('user', $datalog); 

					echo $this->session->set_userdata($data);
					return $data;
				}
			}
			// If the previous process did not validate
			// then return false.
			return false;

		
    }

	public function updatelogout(){
			date_default_timezone_set('Asia/Jakarta');
			$datalog = array(
				'status' => "OFFLINE"
            );

			$this->db->where('id', $this->session->userdata("id"));
			$this->db->update('user', $datalog); 
	}
}
?>