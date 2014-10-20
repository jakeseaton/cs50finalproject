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
    if ($_SERVER["REQUEST_METHOD"] == "POST" )
    {
        // validate submission
    	if ($_POST["tourney"] == "")
        {
            apologize("Please choose a tournament");
        }
        else if ($_POST["round"] == "")
        {
            apologize("Please choose a round");
        }
        else if (empty($_POST["school"]))
        {
            apologize("Please input a school");
        }
    	else if (empty($_POST["team"]))
        {
            apologize("Please input a team");
        }
        else if ($_POST["side"] == "0")
        {
            apologize("Please choose a side");
        }
        else if (empty($_POST["opponent"]))
        {
            apologize("Please input their opponent");
        }
        else if(empty($_POST["info"]))
        {
            apologize("Please input the info");
        }
        
        // insert into database
        query("INSERT INTO scouting VALUES (?, ?, ?, ?, ?, ?, ?)", $_POST["tourney"], $_POST["round"], $_POST["school"], $_POST["team"], $_POST["side"], $_POST["opponent"], $_POST["info"]);

        // redirect
        redirect("scouting.php");
    }
    
    // else display form
    else
    {
        // fill tournaments
        $tournaments = query("SELECT * from tournaments");

        // ensure success
        if ($tournaments === false)
        {
            apologize("Data Retrieval Failure");
        }
           
        // render    
        render("scouting_submission_form.php", ["tournaments" => $tournaments, "title" => "Submit Scouting"]);
        
    }
?> 