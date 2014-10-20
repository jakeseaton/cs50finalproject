<?php 
	// configuration
    require("../includes/config.php");
	
	// if form was submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    	// validate submission
		if ($_POST["result"] == "")
		{
			apologize("Please choose a submission to delete");
		}
		
		// delete scouting
		query("DELETE FROM results WHERE id = ?", $_POST["result"][0]);
		
		// redirect to schedule
		redirect("results.php");
    }

	// else render form
	else
	{
        // fill results
        $results = query("SELECT * FROM results");

        if ($results === false)
        {
        	apologize("Data Retrieval Failure");
        }
    	
    	// render
		render("delete_results_form.php", ["results" => $results, "title" => "Delete Submission"]);
            
    }	
?>