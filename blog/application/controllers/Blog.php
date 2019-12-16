<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	public function index(){
		$this->twig->display('blog/beranda');
	}

	public function tambah(){
		if (!$_POST){
			$this->twig->display('blog/tambah');
		} else {

		}
	}
}
