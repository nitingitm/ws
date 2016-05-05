<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index() {
		$this->load->model('web_model', 'wm');
		
		$data['title'] = 'Workshop 2016';
		$data_['news'] = $this -> wm -> get_active_news();

		$this -> load -> view('templates/header', $data);
		$this -> load -> view('home', $data_);
		$this -> load -> view('templates/footer');
	}
	
	public function panel_() {
		$this->load->model('web_model', 'wm');
		
		$data['title'] = 'Workshop 2016 - ADMIN PANEL';
		$data_['news'] = $this -> wm -> get_all_news();
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('admin', $data_);
		$this -> load -> view('templates/footer');
	}
	
	public function addNews_($msg_ = '') {
		$data['title'] = 'Workshop 2016 - ADMIN PANEL';
		

		$this -> load -> view('templates/header', $data);
		$this -> load -> view('add');
		$this -> load -> view('templates/footer');
	}
	
	public function editNews_($id) {
		$data['title'] = 'Workshop 2016 - ADMIN PANEL';
		
		$this->load->model('web_model', 'wm');
		$data_['rec_'] = $this->wm->fetch_rec($id);
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('edit', $data_);
		$this -> load -> view('templates/footer');
	}
	
	public function createnews(){
		$this->load->model('web_model', 'wm');
		
		$flag = $this->wm->createnews_();
		
		if($flag == TRUE){
			$this->session->set_flashdata('msg_', 'Successfully Submitted');
		}else{
			$this->session->set_flashdata('msg_', 'Server Error !!');
		}
	redirect('web/addNews_');
	}
	
	public function news_status($st, $id){
		$this->load->model('web_model', 'wm');
		$this->wm->change_news_status($id, $st);
	redirect('/web/panel_');
	}

	public function del_news($id){
		$this->load->model('web_model', 'wm');
		$this -> wm -> delete_news($id);
		
	redirect('/web/panel_'); 
	}
	public function update_news(){
		$this->load->model('web_model', 'wm');
		$this->wm->update_news_();

	redirect('/web/panel_');
	}
}
