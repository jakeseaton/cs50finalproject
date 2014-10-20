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

    // fill judges
    $judges = query("SELECT * FROM debate_judges");
    
    // ensure success
    if ($judges === false)
    {
    	apologize("Data Retrieval Failure");
    }
   	
   	// render page
   	render("view_debate_judges_form.php", ["title" => "Debate Judges", "judges" => $judges ]);
?>