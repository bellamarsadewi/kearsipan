<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');

		if ($this->session->userdata('level') != 'tugas') {
			redirect(base_url('login'));
		}
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	//agenda surat masuk
	public function masuk()
	{
		$data['masuk'] = $this->masuk->tabmasuk('surat_masuk');
		$this->load->view('super-admin/surat_masuk',$data);
	}

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

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */