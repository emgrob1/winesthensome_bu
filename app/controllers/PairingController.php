<?php

class PairingController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view->setVar('posts', Grapes::find());
		
		$food = Food::getFood();

		$this->view->setvar("foodSelect", $food);

    }

	public function viewAction(){
				
		$this->view->setVar('posts', Grapes::find());
	}
}
	
