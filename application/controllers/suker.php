<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk');
		$this->load->helper('url');
	}

	public function suker()
	{
		$data['suker'] = $this->masuk->suker('surat_keluar');
		$data['keluar'] = $this->db->get('kode_agenda');
		$this->load->view('super-admin/surat_keluar',$data);
	}

	public function input_keluar()
	{
		$this->load->view('super-admin/input_keluar');
	}

	public function add_suker()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '5000';
		$config['max_width']  = '6000';
		$config['max_height']  = '2048';
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('foto')){
			$foto = "";
		}
		else{
			$foto = $this->upload->file_name;
		}
		
		$id = $this->masuk->get_suker();
		$object = array(
						'tgl_surat' 	=> $this->input->post('tanggal'),
						'kode_agenda'	=> $this->input->post('kode'),
						'no_surat' 		=> $this->input->post('nosur'),
						'kepada' 		=> $this->input->post('kepada'),
						'perihal' 		=> $this->input->post('perihal'),
						'pengelola'		=>$this->input->post('pengelola'),
						'foto'			=> $foto);
		$this->masuk->add_suker('surat_keluar',$object);
		redirect('suker/suker');
	}

	public function delsuker($id)
	{
		$where = array('id_keluar' =>$id );
		$this->masuk->delsuker('surat_keluar',$where);
		redirect('suker/suker');
	}

	public function editsuker($id)
	{
		$where = array('id_keluar' => $id);
		$data['editsuk'] = $this->masuk->detail('surat_keluar',$where)->result();
		$this->load->view('super-admin/edit_suker',$data);
	}

	public function edit_keluar($id)
	{
		
		$where = array('id_keluar' => $id);
		$object = array('id_keluar' => $id, 
						'tgl_surat' => $this->input->post('tanggal'),
						'kode_agenda' => $this->input->post('kode'),
						'no_surat' => $this->input->post('nosur'),
						'kepada' => $this->input->post('kepada'),
						'perihal' => $this->input->post('perihal'),
						'pengelola'=>$this->input->post('pengelola'));
		$this->masuk->editsuker('surat_keluar',$object,$where);
		redirect('suker/suker');
	}

}

/* End of file suker.php */
/* Location: ./application/controllers/suker.php */