<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Web_model extends CI_Model {

	function get_all_news() {
		$this -> db -> order_by('ID', 'desc');
		$query = $this -> db -> get('news');

	return $query -> result();
	}
	function get_active_news(){
		$this->db->where('STATUS', 1);
		$this -> db -> order_by('ID', 'desc');
		$query = $this -> db -> get('news');

	return $query -> result();
	}
	public function createnews_(){
		date_default_timezone_set ("Asia/Calcutta");
		
		$data = array(
			'SUBJECT' 		=> $this->input->post('subject'),
			'NEWS'			=> $this->input->post('news'),
			'DATE_'			=> date('d/m/Y'),
			'STATUS'		=> $this->input->post('status')
		);
		
		$bool_ = $this->db->insert('news', $data);
	return $bool_;
	}
	public function change_news_status($id, $st){
		$this->db->where('ID', $id);
		$data = array(
			'STATUS' => $st
		);
		$this->db->update('news', $data);
	}
	public function delete_news($id){
		$this->db->where('ID', $id);
		$this->db->delete('news');
	}
	public function fetch_rec($id){
		$this->db->where('ID', $id);
		$query = $this->db->get('news');
	return $query->row();
	}
	public function update_news_(){
		$data = array(
			'SUBJECT' 		=> $this->input->post('subject'),
			'NEWS'			=> $this->input->post('news'),
			'DATE_'			=> date('d/m/Y'),
			'STATUS'		=> $this->input->post('status')
		);
		
		$this->db->where('ID', $this->input->post('id_'));
		$this->db->update('news', $data);
	}
}
?>