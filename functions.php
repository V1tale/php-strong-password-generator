<?php
session_start();
    $numberGET = intval($_GET ["number"]); 
    var_dump($numberGET);
    $characters = "abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVXYZ1234567890!£$%&/?^òàè*+ù§";
    $randomNumbers = "";
    if (!empty($numberGET)) {
        if ($numberGET >= 4 && $numberGET <= 30) {
        for ($i = 0; $i < $numberGET; $i++) {
            $rndNumber = (rand(0, strlen($characters) )-1);
            $randomNumbers.= $characters[$rndNumber];
        };
    } else {
        $alert = "<h2>La password deve essere compresa tra i 4 e i 30 caratteri</h2>";
    };
    };
    var_dump($randomNumbers);

?>
