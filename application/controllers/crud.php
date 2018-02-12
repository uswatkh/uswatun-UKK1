<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$userid = $this->input->post('userid');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
 
		$data = array(
			'userid' => $userid,
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}
	function hapus($userid){
		$where = array('userid' => $userid);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
	}
	function edit($userid){
		$where = array('userid' => $userid);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);

	}
	function update(){
	$userid = $this->input->post('userid');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$fullname = $this->input->post('fullname');
	$level = $this->input->post('level');
 
	$data = array(
		'userid'=> $userid,
		'username' => $username,
		'password' => $password,
		'fullname' => $fullname,
		'level' => $level
	);
 
	$where = array(
		'userid' => $userid
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index'); 
}
 
}