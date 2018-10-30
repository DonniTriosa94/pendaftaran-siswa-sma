<?php
class M_admin extends CI_Model{
	function __construct (){
		parent :: __construct ();
		$this ->load -> database ();
	}

	function select_all_siswa (){
		$this ->db -> select ('*');
		$this ->db -> from ('data_siswa');
		return $this ->db -> get ();
	}
	function select_all_nilai_terima(){
		$this ->db -> select ('*');
		$this ->db -> from ('data_nilai');
		$this ->db -> order_by('jumlah',"desc");
		$this ->db -> limit("100");
		return $this ->db -> get ();
	}

	function select_all_nilai (){
		$this ->db -> select ('*');
		$this ->db -> from ('data_nilai');

		return $this ->db -> get ();
	}
	
	function select_all_kontak (){
		$this ->db -> select ('*');
		$this ->db -> from ('contact');

		return $this ->db -> get ();
	
	}
	function login($data){
		$username=$data['username'];
		$password=$data['password'];
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get();
	}

  }
 ?>