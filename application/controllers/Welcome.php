<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk');
		$this->load->helper('url', 'form');

		if ($this->session->userdata('level') != "superadmin") {
			redirect('login');
		}

	}
	
	public function dashboard()
	{
		$this->load->view('super-admin/dashboard');
	}

	//agenda surat masuk
	public function masuk()
	{
		$data['masuk'] = $this->masuk->tabmasuk('surat_masuk');
		$this->load->view('super-admin/surat_masuk',$data);
	}

	public function input_masuk()
	{
		$data['kode'] = $this->db->get('kode_agenda')->result();
		$this->load->view('super-admin/input-masuk',$data);
	}

	public function add_masuk()
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

		$id = $this->masuk->get_masuk();
		$object = array(
			'tgl_surat' 	=> $this->input->post('tanggal'),
			'diterima_tgl' => $this->input->post('diterima'),
			'kode_agenda' 	=> $this->input->post('kode'),
			'no_surat' 		=> $this->input->post('nosur'),
			'jenis_surat'   => $this->input->post('jenis'),
			'dari' 			=> $this->input->post('dari'),
			'perihal' 		=> $this->input->post('perihal'),
			'pengelola' 	=> $this->input->post('pengelola'),
			'foto'			=> $foto,
			'status' 		=> 0);
		$this->masuk->add_masuk('surat_masuk',$object);
		redirect('Welcome/desposisi');
	}

	public function delmasuk($id)
	{
		$where = array('id_masuk' =>$id );
		$this->masuk->delmasuk('surat_masuk',$where);
		redirect('Welcome/masuk');
	}

	public function editmas($id)
	{
		$where = array('id_masuk' => $id);
		$data['editmas'] = $this->masuk->detail('surat_masuk',$where)->result();
		$this->load->view('super-admin/edit_masuk',$data);
	}

	public function editmasuk($id)
	{
		$where = array('id_masuk' => $id);
		$object = array('id_masuk' => $id,
						'diterima_tgl' => $this->input->post('diterima'),
						'tgl_surat' => $this->input->post('tanggal'),
						'kode_agenda' => $this->input->post('kode'),
						'no_surat' => $this->input->post('nosur'),
						'jenis_surat' => $this->input->post('jenis'),
						'dari' => $this->input->post('dari'),
						'perihal' => $this->input->post('perihal'),
						'pengelola'=>$this->input->post('pengelola'));
		//die(var_dump($object));
		$this->masuk->editmas('surat_masuk',$object,$where);
		redirect('Welcome/masuk');
	}

	//tutup surat masuk

	//desposisi
	public function desposisi()
	{
		$where = array('status' => '0' );
		$data['ms'] = $this->db->get_where('surat_masuk',$where)->result();
		$this->load->view('super-admin/desposisi',$data);
	}

	public function detail($id)
	{
		$where = array('id_masuk' => $id);
		$data['tambah'] = $this->masuk->detail('surat_masuk',$where)->result(); 
		$data['editmas'] = $this->db->get('surat_masuk',$where)->result();
		$data['despos'] = $this->masuk->detail('surat_masuk',$where)->result();
		$this->load->view('super-admin/detail',$data);
	}

	public function add_despos($id)
	{
		$where  = array('id_masuk' => $id );
		$object = array(
						'pemberi_despos' => $this->input->post('pemberi'),
						'terusan' => $this->input->post('terusan'),
						'untuk' => $this->input->post('untuk'),
						'isi_despos'=>$this->input->post('isi'));
		$this->db->update('surat_masuk',$object,$where);
		redirect('Welcome/desposisi');
	}

	//tutup desposisi

	//arsip

	public function arsip()
	{
		$data['arsip'] = $this->db->get('kode_agenda')->result();
		$this->load->view('super-admin/arsip',$data);
	}

	public function detail_arsip($kode)
	{
		$kode = array('kode_agenda' => $kode,
						'status' => 1 );
		$data['detail'] = $this->db->get_where('surat_masuk' ,$kode)->result();
		$this->load->view('super-admin/detail_arsip', $data);
	}

		public function kirim($id)
	{
		$where = array('id_masuk' => $id);
		$data = array('status' => 1);

		$res = $this->db->update('surat_masuk',$data ,$where);

		if ($res >= 1) {
			redirect('Welcome/desposisi');
						}
	}
	
	//tutup arsip

	//kode agenda

	public function no_agenda()
	{
		$data['agenda'] = $this->db->get('kode_agenda')->result();
		$this->load->view('super-admin/no_agenda',$data);
	}

	public function input_agenda()
	{
		$this->load->view('super-admin/input_agenda');
	}

	public function agenda()
	{
		$id = $this->masuk->get_agenda();
		$object = array('no_agenda' => $this->input->post('no_agenda'),
						'keterangan' => $this->input->post('keterangan'));
		$this->masuk->add_agenda('kode_agenda',$object);
		redirect('Welcome/no_agenda');
	}

	//tutup kode egenda

	//laporan pdf desposisi

	public function laporan_pdf($id){

		$where = array('id_masuk' => $id);
		$data['tampil'] = $this->masuk->detail('surat_masuk',$where)->result();
		$this->load->view('pdf',$data);

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "desposisi.pdf";
    $this->pdf->load_view('pdf', $data);


	}
}
