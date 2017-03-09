<?php

use Phalcon\Mvc\Model\Query;

class Food extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $food_id;

    /**
     *
     * @var string
     */
    public $food_name;



	public function initialize(){
		  $this->hasMany('id', 'Grapes', 'food_id', NULL);
	}


    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
     
     
     
    public function getSource()
    {
        return 'food';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Food[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Food
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

	public static function getFood(){
		$foods = Food::find(
    array(
        "order" => "food_name",
		"emptyValue" => "Select ...",
    ));
	return $foods;
	}

	public static function showPairings(){
		
		$resultset = $this->modelsManager->createBuilder()
   ->from('Food')
   ->join('Grapes.grape_name')
   ->limit(20)
   ->orderBy('Food.food_name')
   ->getQuery()
   ->execute();
		
		
		return $resultset;
	}
	}