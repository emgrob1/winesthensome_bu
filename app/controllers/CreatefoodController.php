<?php

class CreatefoodController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function saveAction(){
		$food = new Food();
		
		$success = $food->save(
		$this->request->getPost(),
		array(
		"food_name",
		));
				if($success) {
					//echo "Theater Saved";
					$this->view->disable();
					header('location:/winesthensome/createFood');
						
				} else {
					echo "Food NOT saved";
					$message = $theater->getMessages();
					 foreach ($messsages as $message) {
					 	echo $message->getMessages(), "<br/>";
					 }
				}
		
	}
}

