<?php 
 
class Guestbook_model extends CI_Model {
 
  public function __construct() {
    $this->load->database();
  }
 
  public function get_posts() {
    $this->db->select('*')->from('ci_posts')->order_by('id', 'desc');
    $query = $this->db->get();
    return $query->result_array();
  }
 
  public function set_posts() {
    $data = array(
      'text' => $this->input->post('text'),
      'author' => $this->input->post('author')
    );
    $data = $this->security->xss_clean($data);
 
   return $this->db->insert('ci_posts', $data);
  }
 
}