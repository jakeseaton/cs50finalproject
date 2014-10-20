<?php

// configuration
require( "../includes/config.php");

// require login
	if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

// fill signouts
$signouts = query("SELECT * FROM signout");

// iterate through signouts
foreach($signouts as $signout)
{
	// if they signed out friday
    if ($signout["friday"] == 1)
	{
		// add message
        $signout["f_text"] = "Cannot Go";
	}
	else
	{
		// add message
        $signout["f_text"] = "";
	}
	
	// if they signed out saturday
	if ($signout["saturday"] == 1)
    {
        // add message
        $signout["s_text"] = "Cannot Go";
    }
    else
    {
    	// add message
        $signout["s_text"] = "";
    }
}

// render
render("all_signouts_form.php", ["signouts" => $signouts, "title" => "All Signouts"]);

?>