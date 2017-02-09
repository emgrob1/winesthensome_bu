<?php



class GrapesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		$grapes = GrapesController::getAll();
		var_dump($grapes);
    }

}

