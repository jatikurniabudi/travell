<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('mcrud');
		$this->load->helper('url');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function tambah_user()
	{
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'username'=>$username,
			'fullname'=>$fullname,
			'password'=>md5($password),
			'level'=>$level
		);
		$this->mcrud->input_data($data, 'user');
		redirect('Welcome');

	}

	Public function data_user(){
		$data['user']=$this->mcrud->tampil_data_user()->result();
		$this->load->view('hehee', $data);

	}

	public function hapus_user($id){
		$where=array('id'=>$id);
		$this->mcrud->hapus_data($where,'user');
		redirect('welcome/data_user');

	}
}
