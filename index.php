<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 03.02.17.
 * Time: 00:25
 */

require_once 'Autoloader/Autoloader.php';

spl_autoload_register('Autoloader::ControllerLoader');
spl_autoload_register('Autoloader::ModelLoader');
spl_autoload_register('Autoloader::ViewLoader');

