<?php
/**
 * Shorturl public file
 * @package YetiForce
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
chdir(dirname(__FILE__) . '/../');
\App\Config::$isPublicDir = true;
require 'shorturl.php';
