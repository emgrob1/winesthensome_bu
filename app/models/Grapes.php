<?php

class Grapes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $type;

    /**
     *
     * @var string
     */
    public $grape_name;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'grapes';
    }


/**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('food_id', 'Food', 'id', NULL);
      
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Grapes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Grapes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
	
		
}
