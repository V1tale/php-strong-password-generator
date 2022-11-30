<?php
session_start();
    $numberGET = intval($_GET ["number"]); 
    var_dump($numberGET);
    $characters = "abcdefghijklmnopqrstuvxyzABCDEFGHIJKLMNOPQRSTUVXYZ1234567890!£$%&/?^òàè*+ù§";
    
    
    if (!empty($numberGET)) {
        if ($numberGET >= 4 && $numberGET <= 30) {
            $password ="";
            genNumber($numberGET, $characters, $password);
            $_SESSION["password"] = <h2>$password</h2>;
        } else {
            $alert = "<h2>La password deve essere compresa tra i 4 e i 30 caratteri</h2>";
            $_SESSION["alert"] = <h2>$alert</h2>;
        };
        header("Location: ./success.php");
    }
    
    
    function genNumber($number, $array, $password) {
        for ($i = 0; $i < $number; $i++) {
            $rndNumber = (rand(0, strlen($array) )-1);
            $password.= $array[$rndNumber];
            var_dump($password);
        }
        return $password;
    }

?>
