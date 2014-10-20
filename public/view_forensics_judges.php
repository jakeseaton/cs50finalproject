<?php 
	// configuration
  require("../includes/config.php");
    
  // fill judges
  $judges = query("SELECT * FROM forensics_judges");
    
  // ensure success
  if ($judges === false)
  {
  	apologize("Data Retrieval Failure");
  }
   	
 	// render page
 	render("view_forensics_judges_form.php", ["title" => "Forensics Judges", "judges" => $judges ]);
?>