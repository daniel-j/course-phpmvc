<?php
/**
* Holding a instance of CCloudChaser to enable use of $this in subclasses.
*
* @package CloudChaserCore
*/
class CObject {

   public $config;
   public $request;
   public $data;
   public $db;
   public $views;
   public $session;

   /**
    * Constructor
    */
   protected function __construct() {
    $cc = CCloudChaser::Instance();
    $this->config   = &$cc->config;
    $this->request  = &$cc->request;
    $this->data     = &$cc->data;
    $this->db       = &$cc->db;
    $this->views    = &$cc->views;
    $this->session  = &$cc->session;
  }

  /**
   * Redirect to another url and store the session
   */
  protected function RedirectTo($url) {
    $cc = CCloudChaser::Instance();
    if(isset($cc->config['debug']['db-num-queries']) && $cc->config['debug']['db-num-queries'] && isset($cc->db)) {
      $this->session->SetFlash('database_numQueries', $this->db->GetNumQueries());
    }    
    if(isset($cc->config['debug']['db-queries']) && $cc->config['debug']['db-queries'] && isset($cc->db)) {
      $this->session->SetFlash('database_queries', $this->db->GetQueries());
    }    
    if(isset($cc->config['debug']['timer']) && $cc->config['debug']['timer']) {
      $this->session->SetFlash('timer', $cc->timer);
    }    
    $this->session->StoreInSession();
    header('Location: ' . $this->request->CreateUrl($url));
  }

}