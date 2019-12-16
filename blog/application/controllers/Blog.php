<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function index(){
		$data = $this->db->order_by('id', 'desc')->get('blog')->result();
		$this->twig->display('blog/beranda', $data);
	}

	public function tambah(){
		if (!$_POST){
			$this->twig->display('blog/tambah');
		} else {
			$data = (object) $this->input->post();
			$data->tanggal = date('d/m/Y H:i:s');
			$this->db->insert('blog', $data);
			redirect(site_url());
		}
	}
}
