B.S.Abdur Rahman University

Internet Programming Lab Project:

Instructor: Dr.R.Shriram

Project Members: Goutam Raju, Dinesh Kumar

Title: News Website for League of Legends


Instructions to run project:

1.Download xampp php development environment. 
  (link: https://www.apachefriends.org/index.html)

2.Ensure that the MySql and Apache server are installed during xampp setup.

3.Open up htdocs in the xampp installation directory in you hard drive and
  copy all the files provided in the Gitub project.

4.Make sure to create the subdirectories as mentioned in the file names, and 
  place the necessary files within those subdirectories (img,imgthumb,inc,css)

5.Open up the xampp control panel and start the Apache server and Mysql.

6.You can configure the default browser for xampp by using the config. button
  in the control panel.

7.Type localhost/phpmyadmin in the url bar of your browser. This will open
  up your mysql database.

8.Create a db 'leagueoflegends'. Create the tables, 'champions', 'la'

9.Create the following columns in 'champions': id, name, stext, defense, attack, magic, difficulty.

10.Enter the following records into 'champions':

1	Anivia		the Cryophoenix			Mage		4	1	10	10	
2	Annie		the Dark Child			Mage		3	2	10	6	
3	Azir		the Emperor of the Sands	Mage		3	6	8	9	
4	Blitzcrank	the Great Steam Golem		Tank		8	4	5	4	
5	Brand		the Burning Vengeance		Mage		2	2	9	4	
6	Corki		the Daring Bombardier		Marksman	3	8	6	6	
7	Darius		the Hand of Noxus		Fighter		5	9	1	2
8	Diana		Scorn of the Moon		Fighter		6	7	8	4	
9	Draven		the Glorious Executioner	Marksman	3	9	1	8	
10	Fizz		the Tidal Trickster		Fighter		4	6	7	6	
11	Irelia		the Will of Blades		Fighter		4	7	5	5	
12	jarvanIV	the Exemplar of Demacia		Fighter		8	6	3	5 


11.The 'la' table has the columns: id,title,description,keyword,date,link.

12.Fill the table with the details of the articles you wish to display and their corresponding link.

13.New rows can be inserted using the insert query or the insert button included in phpmyadmin.

14.In order to get the email function working, the following changes need to be made:

15.Open the php.ini file find [mail function] and change

	SMTP=smtp.gmail.com
	smtp_port=587
	sendmail_from = my-gmail-id@gmail.com
	sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

16.Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code

	[sendmail]

	smtp_server=smtp.gmail.com
	smtp_port=587
	error_logfile=error.log
	debug_logfile=debug.log
	auth_username=my-gmail-id@gmail.com
	auth_password=my-gmail-password
	force_sender=my-gmail-id@gmail.com

17.Typing localhost/index.php should now open up the completed project.

18.All code is commented annotated for easier understanding.

Note: Internet connection is required for jquery functions to operate.

credits: meyerweb.com, younes rm