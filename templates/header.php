<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>MHS Debate</title>
        <?php endif ?>

        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    
    <body>
        
        <div class="container">
            
            <div id="top">
                <br/>
                <a href="/"><img alt="MHS Debate" src="img/TITLEcopy.png"/></a>
            </div>

            
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="results.php">Results</a>
                    <ul>    
                        <li><a href="results.php">Current Season</a></li>
                        <li><a href="history.php">Team History</a></li>
                    </ul>
                </li>
                <li><a href="tournament.php">Home Tournament</a>
                    <ul>
                        <li><a href="tournament.php">Info</a></li>
                        <li><a href="debate_judge_signup.php">Sign Up to Judge Debate</a></li>                        
                        <li><a href="view_debate_judges.php">View Debate Judges</a></li>
                        <li><a href="forensics_judge_signup.php">Sign Up to Judge Forensics</a></li>                        
                        <li><a href="view_forensics_judges.php">View Forensics Judges</a></li>
                    </ul>
                </li>
                <li><a href="coach_info.php">Coaches</a>
                    <ul>
                        <li><a href="coach_info.php">Coach Info</a></li>
                        <li><a href="request_contact.php">Request Contact</a></li>
                        <li><a href="results_submission.php">Submit Results</a></li>
                        <li><a href="add_tournament.php">Add Tournaments</a></li>
                        <li><a href="delete_tournament.php">Delete Tournaments</a></li>
                        <li><a href="all_signouts.php">View Signouts</a></li>
                        <li><a href="view_events.php">View By Event</a><li>
                    </ul>
                </li>
                <li><a href="profile.php">Students</a>
                    <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li><a href="choose_event.php">Choose Event</a></li>
                        <li><a href="scouting_submission.php">Submit Scouting</a></li>
                        <li><a href="scouting.php">Scouting</a></li>
                        <li><a href="add_contact.php">Add Contact Info</a></li>
                        <li><a href="signout.php">Sign Out</a></li>                       
                        <li><a href="login.php">Log In</a></li>  
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </li>
                

            </ul>
                        
            <div id="middle">
