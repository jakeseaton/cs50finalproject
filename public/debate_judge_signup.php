<?php
    
    // configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
            // validate
            if(empty($_POST["name"]))
            {
                apologize("Please provide your name");
            }
            else if(empty($_POST["for"]))
            {
                apologize("Please provide your affiliation");
            }
            else if(empty($_POST["number"]))
            {
                apologize("Please provide your phone number");
            }
            // if they didnt choose any rounds
            else if ($_POST["1"] == "0" && $_POST["2"] == "0" && $_POST["3"] == "0" && $_POST["4"] == "0" && $_POST["5"] == "0" && $_POST["6"] == "0" && $_POST["7"] == "0" && $_POST["8"] == "0")
            {
                apologize("You didn't choose any rounds");
            }

            // insert into judges database
            query("INSERT INTO debate_judges VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $_POST["name"], $_POST["for"], $_POST["number"], $_POST["1"], $_POST["2"], $_POST["3"], $_POST["4"], $_POST["5"], $_POST["6"], $_POST["7"], $_POST["8"]);
    
            // redirect home
            redirect("index.php");
    }  
    else
    {
        // else render form
        render("debate_judge_signup_form.php", ["title" => "Sign Up"]);
    }
?>
