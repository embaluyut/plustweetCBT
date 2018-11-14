<?php

require_once 'src/twitter.class.php';

// enables caching (path must exists and must be writable!)
// Twitter::$cacheDir = __DIR__ . '/temp';


// ENTER HERE YOUR CREDENTIALS (see readme.txt)
$twitter = new Twitter("3srDq3VZgp7cCQcaRQehi2R2Y", "DfMqsC1OgXNodGvWisWIXBEDNyCijdbhn5XGIu5uZ62Ig9yqpg", "1570478605-0wAE06sxuRlJEowORgNuL53OrQ7fU3NfGEvOB9s", "Es3LRixjnI0J0ScEm9dTADNywj8AOwtmyFjTQRXHBkx1X");

$statuses = $twitter->load(Twitter::ME_AND_FRIENDS);

?>

<?php
var_dump($statuses);
?>
