<?php

require_once dirname(__FILE__) . '/../app/Tina_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Tina_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Tina_Controller::main('Tina_Controller', 'index');

