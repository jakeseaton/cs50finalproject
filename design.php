DESIGN
The project aimed to implement a few key features requested by the head coach
	1) Allow judges to sign up for the home tournament
	2) Allow students to submit contact information electronically, rather than having to print, hand out, and collect paper forms.
	3) Create a dynamic schedule that is easily accessible
	4) Allow students to "sign out," or declare inability to attend, tournaments on the schedule.
	5) Have the site no longer appear like this: https://sites.google.com/site/manhattanhighdebate/

Design Decisions:
DATABASE TABLES
	users
		id is a primary key, while username is unique. Id is simpler to pass to Session, while unique username prevents multiples of the same username.
		passwords are crypted and log in compares the crypt of input to what is stored in the database
		graduation year can be used to sort students by year for future features.
		debate is a bool to determine if students compete in policy debate first semester.
		students are able to choose their events, visible on their profile and to the coach, who can view all participants in one event.
		contact is a bool to determine if a student has submitted their contact infomation. It will be used to display all students who have not submitted.
	contacts
		contact information inputted by students is stored with their id, and is available for request by the coach.
	tournaments
		the coach can add and delete tournaments from this, which informs the schedule and drop down menus around the website.
	signout
		students can "sign out" of tournaments and it will be visible on their profile and in a comprehensive table, visible to the coach, making scheduling easier.
		it stores their name and id as per the users database, along with the tournament name from the tournament database, and two boolean values to determine which days they are able to go.
	scouting
		students can submit scouting reports from rounds and performances they watch. 
		tournament is per the tournaments database, while the rest of the data is created via the scouting_submission_form
		there is a 1000 character limit on information, but students are encouraged to write as much as possible.
	results
		the coach can input results for tournament in the tournaments database. he can choose an event from the events array, and type the name of a competetor
		provided he types it correctly (the same as users) the result will appear on their profile
		these will appear in a table that is accessible to the general public.
		ideally this would check to ensure the student actually competed in that event at that tournament, but that assumes the student has submitted all forms as has the coach
	debate_judges
		judges submit their information and availability to this table
		this informs the debate judges table viewable to students and coaches
	forensics_judges
		same as above, but also give the judge the option to choose what type of event they want to judge.
		These are boolean values, to allow the option of not specifying any preference		
CONFIGURATION
	the requirement that a user be logged in was deleted from config.php and moved to the controller for the various pages that require a user to be logged in
	This allows anyone to view certain pages, such as the season's results, the home tournament information, the judge signup forms, and the home page.
	log in/register were changed from pset7 to inclue additional categories.
	Arrays and a variable were added to constants.php to ease the creation of select menus on the forms, and preventing students from, for example, deleting tournaments.
	The menu of links was added to header.php to allow the user to navigate from one part of the website to another at any time.
STYLING
	Styles.css was changed extensively to enable the creation and styling of the drop down bar
	a couple of minor changes were made to bootstrap.
We were able to obtain many of our "Best" objectives on the features the coach asked for in the following ways:
	1) Judge Signup
		The two forms submit to debate_judges and forensics_judges tables
		Information from these tables is displayed in a table for students and coaches who are logged in, making preparation for the tournament much simpler.
		Various bugs, such as one judge submitting multiple times, or submitting again to change their availability, are accounted for.
	2) Contact Info
		Students submit contact info to the contacts table
		The coach can easily request this information from the website with the password. This prevents information from being availably to the general public.
			(provided he can spell their name right--This requirement was another "best" objective)
		This is visible and changeable by the students on their profiles.
	3) Schedule
		The coach can add to and delete from the schedule.
		The tournaments database is utilized often to create a drop down menu
		The coach can input the results from the tournaments, stored in the results table.
		Results specific to each student are displayed on their profiles, along with the events they are competing in.
	4) Sign Outs
		Students have the option to sign out of friday or saturday of any tournaments currently in the database
		These are displayed to the coach in a single table, and individually to the students on their profiles
		After the tournament, deleting it from the schedule will also delete the option to sign out, and the display of those signouts.
	5) Style
		Aside from the fact that my name is no longer large and central, the amount of styling we were able to complete vastly exceeded our expectations.

