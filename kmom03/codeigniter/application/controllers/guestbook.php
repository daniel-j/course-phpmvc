<?php
class Guestbook extends CI_Controller{
 
  public function __construct(){
    parent::__construct();
    $this->load->model('guestbook_model');
    $this->load->helper(array('form','url'));
    $this->load->library('form_validation');
  }
 
  public function index(){
    $data['posts'] = $this->guestbook_model->get_posts();
    $data['title'] = 'Guestbook';
    $data['form'] = form_open('guestbook/create').form_label('Write in the guestbook:', 'text').'<br>'.
      '<br>'.form_label('Username:','author').'<br>'.form_input('author','').
      '<br>'.form_label('Message:','text').'<br>'.form_textarea('text', '').
      '<br>'.form_submit('submit', 'Post').form_close();
    $this->load->view('guestbook/index', $data);
  }
 
  public function create(){
    $this->form_validation->set_rules('text', 'text', 'required');
    $this->form_validation->set_rules('author', 'author', 'required');
    if($this->form_validation->run() === TRUE){
      $this->guestbook_model->set_posts();
      redirect('../');
    } else {
    	$this->index();
    }
    
  }
 
}