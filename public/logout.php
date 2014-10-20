<?php

    // configuration
    require("../includes/config.php"); 

    if(empty($_SESSION["id"]))
    {
    	apologize("You weren't logged in");
    }
    
    // log out current user, if any
    logout();

    // redirect user
    redirect("index.php");

?>
