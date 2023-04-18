<?php

if (isset($_COOKIE["account"])) {
    if ($_COOKIE["account"] > 7 or $_COOKIE["account"] < 0) {
        header("Location: ../login.php");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}

$r = [
    1 => 'DNVLC',
    2 => 'DAVLC',
    3 => 'Référent Vie Scolaire',
    4 => 'CNVL',
    5 => 'CAVL',
    6 => 'CVL',
];

$name = [
    1 => 'M. ...',
    2 => 'M. ...',
    3 => 'M. ...',
    4 => 'Timothée',
    5 => 'Timothée',
    6 => 'Timothée',
];

?>