<?php

// Autoloader
require_once '../vendor/autoload.php';

// Load Config
require_once '../config/config.php';

// Routes
require_once '../routes/web.php';
require_once '../app/Router.php';

// Enable us to use Headers
ob_start();

// Set sessions
if (!isset($_SESSION)) session_start();
