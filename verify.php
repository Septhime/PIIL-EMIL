<?php
    if (!$_COOKIE["CID"] == "y3N72DQ3v5sfuKD") {
        //header("Location: https://cavl.septhime.fr/");
    }

    if (!isset($_COOKIE["warn"]) ) {
        header("Location: https://cavl.septhime.fr/warning.php");
    } else {
        header("Location: https://cavl.septhime.fr/platform");
    }