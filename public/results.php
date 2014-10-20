<?php
	// configuration
    require("../includes/config.php"); 

    // fill rows
    $rows = query("SELECT * FROM results");
    
    // ensure success
    if ($rows === false)
    {
        apologize("Data Retrieval Failure");
    }

    // render portfolio
    render("results_form.php", ["rows" => $rows]);

?>