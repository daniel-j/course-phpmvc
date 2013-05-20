<?php
/**
 * Admin Control Panel to manage admin stuff.
 * 
 * @package CloudchaserCore
 */
class CCAdminControlPanel extends CObject implements IController {


  /**
   * Constructor
   */
  public function __construct() {
    parent::__construct();
  }


  /**
   * Show profile information of the user.
   */
  public function Index() {
    if ($this->user->IsAdministrator()) {
      $this->views->SetTitle('ACP: Admin Control Panel');
      $this->views->AddInclude(__DIR__ . '/index.tpl.php');
    } else {
      $this->RedirectTo('user');
    }
  }
 

}  