<?php
 
class user extends CI_model
{
	function __construct(){
        parent::__construct();
    }
	
	public function insert($data){
        return $this->db->insert('user',$data);
	}
	
	public function cekData($nama){
		$this->db->where('nama_user',$nama);
        $query = $this->db->get('user');
        if($query->num_rows() <= 0){  
            return true;  
        }  
        else{  
            return false;       
        } 
	}

	public function cekDataEmail($email, $password){
		$this->db->where('email_user',$email);
		$this->db->where('password_user',$password);
        $query = $this->db->get('user');
        if($query->num_rows() > 0){  
            return true;  
        }  
        else{  
            return false;       
        } 
    }
    
    public function getNama($email){
        $this->db->where('email_user',$email);
        return $this->db->get('user')->row_array();
    }

}