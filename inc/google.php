<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once ('google-api/vendor/autoload.php');

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('557293921836-1hvf0cs4tvd4o634udu50kv62t08mt5m.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/hotelwebsite6/profile.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


?>