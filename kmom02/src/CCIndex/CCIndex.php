<?php
/**
* Standard controller layout.
* 
* @package CloudchaseCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $cc;
      $cc->data['title'] = "The Index Controller";
   }

}