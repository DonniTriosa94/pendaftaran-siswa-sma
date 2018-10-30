<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_admin');
		//$this->load->helper(array('form','url'));
		$this->load->library('pagination');
	}
	function index() {		
		$this->load->view('v_login');
	}
	public function login(){
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$result=$this->m_admin->login($data)->row();
		if(count($result)>0){
			$data['siswa']=$this->m_admin->select_all_siswa()->result();
			$this->load->view('v_admin_siswa',$data);
		}else{
			$this->session->set_flashdata('message','<strong>Ooops!</strong>Username and Password is incorrect!');
			redirect('c_admin');
		}
	}

	function siswa() {
		$data['siswa']=$this->m_admin->select_all_siswa()->result();
		$this->load->view('v_admin_siswa',$data);
	}

	function nilai() {
		$data['nilai']=$this->m_admin->select_all_nilai()->result();
		$this->load->view('v_admin_nilai',$data);
	}

	function kontak() {
		$data['kontak']=$this->m_admin->select_all_kontak()->result();
		$this->load->view('v_admin_kontak',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('c_admin','refresh');
	}
	function terima(){
		$data['siswa']=$this->m_admin->select_all_siswa()->result();
		$data['nilai']=$this->m_admin->select_all_nilai_terima()->result();
		$this->load->view('v_admin_terima',$data);
	}
}