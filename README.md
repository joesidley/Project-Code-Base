In order to run this code some set up is required.

First of all, a .csv file was submitted in the zip file. The contents of this file must be put into a MySQL database server.
The content of that server needs to be accessed in the index2.php file: This is done by changing lines 86 and 87 to 

$conn = mysqli_connect("localhost:port","name","password","schema_name");
$sql = "SELECT * FROM schema_name.table_name";

The php will then fetch data from the database and display it in the webpage.

This webpage also needs to be run from a dedicated web server in order to run the 3D visualisations of the infocards. I used XAMPP but any web server should work

Finally if you would like to test the mail function in the suggest a new antigen page, make sure to send me an email and I will send you the contents of the mail that I recieved as it is coded to send mail to my email.
This can be changed on line 49 of contact.php by changing to $recipient = "emailaddress@gmail.com"; 
