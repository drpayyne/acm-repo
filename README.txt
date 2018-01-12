# acm-repo
Placement resources repository for SVCE ACM Student Chapter

Four types of data in this repository.
	--> CODE
	--> NON-CODE
	--> HINT
	--> REFERENCE

Formats for filenames.
	--> (code/noncode/hint/reference)(form).html
		Used to submit data into the database using the next file.
	--> (code/noncode/hint/reference)(submit).php
		Handles the SQL insert of data and reroutes to the next file.
	--> (codes/noncodes/hints/references).php
		Displays list of respective data, fetched from database.
		'codes.php' and 'noncodes.php' contain list of links to new page for specific entries.
		'hints.php' contains list of hints right there.
		'references.php' contains list of references, either links to downloads or text right there.
	--> (code/noncode).php
		Displays specific questions entirely.
	--> reference.php 
		//--> TO DO <--//
		Download link to reference file.
		
THIS REPO STATE CONTAINS THE BAREBONES CORE OF THE FINAL WEBSITE. DESIGN PROGRESS IS NILL.

//---> TO DO <---//
Sorting
Filtering
Design
