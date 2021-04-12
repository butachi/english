<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Tina_Controller.php';

Tina_Controller::main('Tina_Controller', array(
    '__ethna_unittest__',
    )
);
