DOCUMENTATION

Our project is a website for the Manhattan High Debate Team. It is based on distribution code from pset7. Eventually it will be uploaded onto the internet, but 
for the purpose of grading it host it locally on the appliance.
 
It uses a SQL database called "project" containing 8 tables. They are users, tournaments, contacts, signout, scouting, results, debate_judges, and forensics_judges.

Along with this are numerous php, html, css, and javascript files, including bootstrap. 
All of the controller php files are stored in the public file. 
All of the html pages and forms are stored in the templates file.
All of the configuration documents which define constants and functions are in the includes file.
	Within this, constants declares the SQL database, the global password, and 3 global variables used in creating various forms.
All of the images are stored in the img folder
All of the external style sheets are stored in the css folder.
All of the javascript, (bootstrap and jquery) are stored in the js folder.

In the appliance, the webiste is configured exactly like pset7. This includes chmod and sudo.
 
Type project into chrome. Many of the pages are accessible without creating an account. To create one, go to project/register or click students>log in>register.

The first two fields are irrelevant and do not insert anything into the SQL Database. You can leave them blank. They serve solely as a deterrent.

Assuming your username is not already taken, you are free to move about the website as a student. Some of the higher level functions, such as manipulating the schedule, require a password, which is 00000000.
	(it was recently revealed that this was our nuclear launch code during the cold war.)
