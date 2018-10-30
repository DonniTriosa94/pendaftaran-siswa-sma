<?php
class M_tubes extends CI_Model{
	function __construct (){
		parent :: __construct ();
		$this ->load -> database ();
	}

	function select_all_siswa (){
		$this ->db -> select ('*');
		$this ->db -> from ('data_siswa');
		return $this ->db -> get ();
	}
	function select_all_nilai (){
		$this ->db -> select ('*');
		$this ->db -> from ('data_nilai');
		$this ->db -> order_by('jumlah',"desc");
		$this ->db -> limit("100");
		return $this ->db -> get ();
	}
	function insert_data_siswa($data){
		$this ->db -> insert ('data_siswa', $data);
	}

	function insert_nilai($data){
		$this->db->insert('data_nilai', $data);
	}

	function select_siswa($nis){
		$this->db->select('*');
		$this->db->from('data_siswa');
		$this->db->where('nisn',$nis);
		return $this->db->get();
	}

	function select_nilai($nis){
		$this->db->select('*');
		$this->db->from('data_nilai');
		$this->db->where('nisn',$nis);
		return $this->db->get();
	}

	function insert_kontak($data){
		$this ->db -> insert ('contact', $data);
	}

  }