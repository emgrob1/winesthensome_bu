<?php

class CreategrapesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function saveAction(){
		$grapes = new Grapes();
		
		$success = $grapes->save(
		$this->request->getPost(),
		array(
		"type",
		"grape_name",
		));
				if($success) {
					//echo "Theater Saved";
					$this->view->disable();
					header('location:/winesthensome/createGrapes');
						
				} else {
					echo "Grapes NOT saved";
					$message = $theater->getMessages();
					 foreach ($messsages as $message) {
					 	echo $message->getMessages(), "<br/>";
					 }
				}
		
	}
}

