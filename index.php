<?php

require_once('./startSession.php');
require('./vendor/autoload.php');

use App\Utils\{Router, Request};

Router::load('./routes.php')
   ->direct(Request::uri(), Request::method());
