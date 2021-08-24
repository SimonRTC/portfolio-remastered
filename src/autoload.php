<?php

if (!SESSION_ID()) { SESSION_START(); }

$path = realpath( __DIR__ . "/.." );
$path = ($path !== false? $path: null);

define("__PATH__", $path);

require __PATH__ . '/vendor/autoload.php';

// Load environment variables
$Dotenv = (new \Symfony\Component\Dotenv\Dotenv)->load(__PATH__ . "/.env");

?>