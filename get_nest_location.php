<?php

require_once 'nest.class.php';
require_once 'nest.auth.php';

// Your Nest username and password.
// $username = 'you@gmail.com';
// $password = 'Something other than 1234 right?';

// The timezone you're in.
// See http://php.net/manual/en/timezones.php for the possible values.
date_default_timezone_set('Europe/Amsterdam');

$nest = new Nest(($username ?: NULL), ($password ?: NULL), ($issue_token ?: NULL), ($cookies ?: NULL));

echo json_encode($nest->getUserLocations());

function jlog($json) {
    echo json_encode($json, JSON_PRETTY_PRINT) . "\n";
}
