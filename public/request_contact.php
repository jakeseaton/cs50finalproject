<?php

// configuration
require("../includes/config.php");

// require log in
if (!preg_match("{(?:login|logout|register)\.php$}", $_SERVER["PHP_SELF"]))
    {
        if (empty($_SESSION["id"]))
        {
            redirect("login.php");
        }
    }

// if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" )
{
	if (empty($_POST["first"]))
	{
		apologize("Please input their first name");
	}
	else if (empty($_POST["last"]))
	{
		apologize("Please input their last name");
	}
	else if ($_POST["password"] != "00000000")
	{
		apologize("Wrong Password");
	}
	
	// get contact
	$contact = query("SELECT * FROM contacts WHERE first = ? AND last = ?", $_POST["first"], $_POST["last"]);
	
	if (count($contact) < 1)
	{
		apologize("Either you mispelled their name or they haven't submitted info");
	}
	
	render("contact_form.php", ["title" => "Student Contacts", "contact" => $contact]);
}

// else render form
else 
{
	render("request_contact_form.php", ["title" => "Request Contact"]);
}
 ?>
