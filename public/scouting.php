<?php
    // configuration
	require("../includes/config.php"); 

    // require login
    if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

    // fill rows
    $rows = query("SELECT * FROM scouting");
    
    // ensure success
    if ($rows === false)
    {
        apologize("Data Retrieval Failure");
    }
    
    // render scouting data
    render("scouting_form.php", ["rows" => $rows, "title" => "Scouting"]);
?>