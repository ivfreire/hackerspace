<?php
    require_once('config.php');
    $file = '../data/HS_STATE.txt';
    if (isset($_POST['key']) && isset($_POST['state'])) {
        if ($_POST['key'] == $secret_key) {
            if ($_POST['state'] == 'ON') file_put_contents($file, 'ON');
            else file_put_contents($file, 'OFF');
        }
    }
?>