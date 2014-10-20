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

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	// validate submission
    	if(empty($_POST["first"]))
    	{
    		apologize("Please input your first name");
    	}
      	
        // validate last name
        else if(empty($_POST["last"]))
    	{
    		apologize("Please input your last name");
    	}
    	
        // validate cell
        else if(empty($_POST["cell"]))
    	{
    		apologize("Please input your cell number");
    	}
    	
        // validate home
        else if(empty($_POST["home"]))
    	{
    		apologize("Please input your home number (or N/A)");
    	}
    	// validate parent 1
        else if(empty($_POST["p1c"]))
    	{
    		apologize("Please input your first parent's cell number");
    	}
        else if(empty($_POST["p1n"]))
    	{
    		apologize("Please input your first parent's name");
    	}
    	
        // validate parent 2
        else if(empty($_POST["p2c"]))
    	{
    		apologize("Please input your second parent's cell number (or N/A)");
    	}
    	
        else if(empty($_POST["p2n"]))
    	{
    		apologize("Please input your second parent's name (or N/A)");
    	}
    	
        // validate next
        else if($_POST["next"] == "0")
    	{
    		apologize("Please choose the next person to contact");
    	}
    	
        // if the already have submitted contact infom
        $already = query("SELECT id FROM contacts WHERE id = ?", $_SESSION["id"]);
        
        if (count($already) == 1)
        {
            // delete previous entry
            query("DELETE FROM contacts WHERE id = ?", $_SESSION["id"]);
        }

        // insert into contacts
        query("INSERT INTO contacts VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["first"], $_POST["last"], $_POST["cell"], $_POST["home"], $_POST["p1c"], $_POST["p1n"], $_POST["p2c"], $_POST["p2n"], $_POST["next"]);
    	
        // update users
        query("UPDATE users SET contact = 1 WHERE id = ?", $_SESSION["id"]);

        // redirect home
        redirect("profile.php");
    }
    else
    {
    	render("add_contact_form.php", ["title" => "Add Contact Info"]);
    }
?>