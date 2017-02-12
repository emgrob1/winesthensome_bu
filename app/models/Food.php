<?php

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
    ));
	return $foods;
	}

	public static function showPairings(){
		
		
		
		
	}
}
