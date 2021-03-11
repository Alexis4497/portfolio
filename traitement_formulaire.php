<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LcyTGYaAAAAAB1iQDAmPJMrrV5b77If9mrija5O';
$recaptcha_response = $_POST['recaptcha_response'];

$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);

if ($recaptcha->score >= 0.5) {

} else {
} } ?>