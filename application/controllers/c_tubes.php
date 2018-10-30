<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_tubes extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_tubes');
		$this->load->helper(array('form','url'));
		$this->load->library('pagination');
	}

	function index() {
		$this->load->view('v_home');
	}

	function kontak() {
		$this->load->view('v_contact');
	}
	function penerima(){
		$data['siswa']=$this->m_tubes->select_all_siswa()->result();
		$data['nilai']=$this->m_tubes->select_all_nilai()->result();
		$this->load->view('v_penerima',$data);

	}

	function adminnya() {
		$this->load->view('v_admin');
	}	
	
	function tambah_data(){
		$data['nisn']='';
		$data['nama_siswa']='';
		//$data['url']='c_tubes/proses_tambah_data';
		$data['jk']='';
		$data['tempat_lahir']='';
		$data['tanggal_lahir']='';
		$data['alamat']='';
		$data['agama']='';
		$data['anakke']='';
		$data['tlp']='';
		$data['asal']='';
		$this->load->view('v_pendaftar', $data);
	}
	function upload(){
		$nisn=$this->input->post('nisn');
		$nama_siswa=$this->input->post('nama_siswa');

		$config['upload_path']= './plugin/foto';
		$config['allowed_types']= 'gif|jpg|png|pdf';

		$config['max_size']= '100000';
		$config['overwrite']= TRUE;

		$config['encrypt_name']= TRUE;
		$config['file_name']= time();
		$this->load->library('upload',$config);

		$jk=$this->input->post('jk');
		$tempat_lahir=$this->input->post('tempat_lahir');
		$tanggal_lahir=$this->input->post('tanggal_lahir');
		$alamat=$this->input->post('alamat');
		$agama=$this->input->post('agama');
		$anakke=$this->input->post('anakke');
		$tlp=$this->input->post('tlp');
		$asal=$this->input->post('asal');

		if(!$this->upload->do_upload('foto')){
			$this->session->set_flashdata('pesan',$this->upload->display_errors());
			redirect('c_tubes/tambah_data');
		}else{
			$upload_data = $this->upload->data();
			$insert['nisn'] = $nisn;
			$insert['nama_siswa'] = $nama_siswa;
			$insert['jk']=$jk;
			$insert['tempat_lahir']=$tempat_lahir;
			$insert['tanggal_lahir']=$tanggal_lahir;
			$insert['alamat']=$alamat;
			$insert['agama']=$agama;
			$insert['anakke']=$anakke;
			$insert['tlp']=$tlp;
			$insert['asal']=$asal;
			$insert['foto'] = $upload_data['file_name'];
			
		
			$this->m_tubes->insert_data_siswa($insert);
			$this->session->set_flashdata('pesan','Data berhasil disimpan!');
			
			$this->load->view('v_data_nilai', $insert);
		}
	}
	function nilai(){
		$nisn=$this->input->post('nisn');
		$mtk=$this->input->post('mtk');
		$bindo=$this->input->post('bindo');
		$ipa=$this->input->post('ipa');
		$binggris=$this->input->post('binggris');
	
		$config['upload_path']= './plugin/nilai';
		$config['allowed_types']= 'gif|jpg|png|pdf';
		$config['max_size']= '100000';
		$config['overwrite']= TRUE;
		$config['encrypt_name']= TRUE;
		$config['file_name']= time();

		$this->load->library('upload',$config);
		$jumlah=$mtk + $bindo + $ipa + $binggris;

		if(!$this->upload->do_upload('gambar')){
			$this->session->set_flashdata('pesan',$this->upload->display_errors());
			redirect('c_tubes/v_input_nilai');
		}else{
			$upload_data = $this->upload->data();
			$insert['nisn'] = $nisn;
			$insert['mtk']=$mtk;
			$insert['bindo']=$bindo;
			$insert['ipa']=$ipa;
			$insert['binggris']=$binggris;
			$insert['jumlah']=$jumlah;
			
			$insert['gambar'] = $upload_data['file_name'];
		
			$this->m_tubes->insert_nilai($insert);
			$this->session->set_flashdata('pesan','nilai berhasil disimpan!');
			$this->load->view('v_preview');
		}
	}
	public function insert_kontak(){
		$insert['nama']=$this->input->post('nama');
		$insert['email']=$this->input->post('email');
		$insert['subject']=$this->input->post('subject');
		$insert['pesan']=$this->input->post('pesan');
		
		$this->m_tubes->insert_kontak($insert);
		$this->session->set_flashdata('pesan','Data berhasil disimpan!');
		redirect('c_tubes');
	}
}
?>