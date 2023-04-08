<?php
	// Start session
	session_start();
	session_regenerate_id(true);

	// Parse Environment Variable
    $envs = parse_ini_file('.env');

    foreach ($envs as $key => $value) {
        $_ENV[$key] = $value;
    }

	// Connect to MySQL
    $host = $_ENV['DB_HOST'];
	$user = $_ENV['DB_USERNAME'];
	$pass = $_ENV['DB_PASSWORD'];
	$db = $_ENV['DB_DATABASE'];

	// Start Google Login Services
	// require 'controller/google-api/vendor/autoload.php';

    // Creating new google client instance
    // $client = new Google_Client();

    // Enter your Client ID
    // $client->setClientId($_ENV['CLIENT_ID']);
    // Enter your Client Secrect
    // $client->setClientSecret($_ENV['CLIENT_SECRET']);
    // Enter the Redirect URL
    // $client->setRedirectUri('http://localhost/yri/controller/route?aksi=login&google=1');

    // Adding those scopes which we want to get (email & profile Information)
    // $client->addScope("email");
    // $client->addScope("profile");

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : " . mysqli_connect_error());
	}

?>