<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function index(){
		$data = $this->db->order_by('id', 'desc')->get('blog')->result();
		$this->twig->display('blog/beranda', compact('data'));
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

	public function edit($id){
		if (!$_POST){
			$data = $this->db->where('id', $id)->get('blog')->result()[0];	
			$this->twig->display('blog/tambah', compact('data'));
		} else {
			$data = (object) $this->input->post();
			$this->db->where('id', $id)->update('blog', $data);
			redirect(site_url() . $id);
		}
	}

	public function tampil($id){
		$data = $this->db->where('id', $id)->get('blog')->result()[0];
		$this->twig->display('blog/tampil', compact('data'));		
	}

	public function hapus($id){
		$data = $this->db->where('id', $id)->delete('blog');
		redirect(base_url());
	}
}
