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
		$cc = CCloudChaser::Instance();
		$cc->data['title'] = "The Index Controller";
		$cc->data['main'] = <<<EQD

<h1>Welcome to the index controller!</h1>

<h3>Some links</h3>
<a href="codeigniter/">Guestbook in codeigniter</a>

EQD;
	}

}
