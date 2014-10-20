<?php
    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // the student id and graduation year fields are to deter non-students from registering.

        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if ($_POST["password"] !== $_POST["confirmation"])
        {
          apologize("Passwords do not match.");
        }
        else if (empty($_POST["first"]) || empty($_POST["last"]))
        {
          apologize("You must provide your name");
        }

        // insert into database
        $result = query("INSERT INTO users (first, last, year, username, hash) VALUES(?, ?, ?, ?, ?)", $_POST["first"], $_POST["last"], $_POST["year"], $_POST["username"], crypt($_POST["password"]));
        
        // log them in
        if ($result !== false)
        {
          // determine id
          $rows = query("SELECT LAST_INSERT_ID() AS id");
          
          if ($rows === false)
          {
            apologize("Data Retrival Failure");
          }
          
          $id = $rows[0]["id"];
          
          // store in SESSION
          $_SESSION["id"] = $row["id"];
          
          // redirect to home
          redirect("/");
        }
        else 
        {
          apologize("Username already taken");
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
?>
