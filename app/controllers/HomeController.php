<?php 
/**
 * 
 */
class HomeController extends Controller{

	public function __construct($controller, $action){
		parent::__construct($controller, $action);
	}

	public function indexAction(){				
		$this->view->render('home/index');
	}

// end of class	
}


// $db = DB::getInstance();		
// 		$contacts = $db->findFirst('contacts', [
// 			// 'conditions' => ['lname' => '?', 'fname' => 'Sam'],
// 			'conditions' => 'lname = ?',
// 			'bind' => ['King']
// 		]);
// 		dnd($contacts);