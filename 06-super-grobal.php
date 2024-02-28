<?php

/**
 * 
 * The PHP superglobal variables are: special predefined variables that are always available in 
 * all scopes throughout a script. They hold information about the server, client, and execution environment. 
 * Some of the most commonly used superglobal variables are
 * 
 * $_GET: Contains variables passed to the current script via URL parameters (query string).
 * 
 * $_POST: Contains variables passed to the current script via HTTP POST method when submitting a form with method="post".
 * 
 * $_REQUEST: Contains variables passed to the current script via both GET and POST methods, 
 * as well as cookies. It's not recommended to use * $_REQUEST as it can lead to security issues.
 * 
 * $_COOKIE: Contains variables passed to the current script via HTTP cookies.
 * 
 * $_SESSION: Contains variables stored in the session. Session data is maintained on 
 * the server and is accessible across multiple pages for a single user session.
 * 
 * $_SERVER: Contains information about the server and execution environment, such as headers, 
 * paths, and script locations.
 * 
 * $_FILES: Contains information about uploaded files sent to the current script via HTTP 
 * POST method (usually in forms with enctype="multipart/form-data").
 * 
 * $_ENV: Contains variables passed to the current script via the environment.
 * 
 * $_GLOBALS: Contains a reference to all variables available in the global scope of the script. 
 * It allows access to global variables from within functions or methods.
 * 
 */


// Accessing GET variables
$userId = $_GET['id'];

// Accessing POST variables
$username = $_POST['username'];

// Accessing SESSION variables
session_start();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

// Accessing SERVER variables
$serverName = $_SERVER['SERVER_NAME'];

// Accessing FILES variables
$fileSize = $_FILES['file']['size'];
