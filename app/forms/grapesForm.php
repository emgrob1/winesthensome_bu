<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;

$form = new Form();

$form->add(
    new Select(
        "type",
        array(
            "W" => "White",
            "R" => "Red",
        )
    )
);

$form->add(
    new Text(
        "grape_name"
    )
);

