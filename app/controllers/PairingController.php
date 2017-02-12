<?php

class PairingController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$food = Food::getFood();
		$this->view->setvar("foodSelect", $food);
    }

	public function viewAction(){
		
		
	}
}
	
