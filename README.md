1. Introduction:

Our Hospital Management System is a web-based application where patients, doctors, and employees can register and log in. Patients can book appointments with doctors, while doctors can view their booked appointments. Employees have access to view patients' bookings, and edit or delete their bookings



2. Project Setup:

The project follows a client-server architecture. The backend is built using PHP, while the frontend is developedusing HTML, JavaScript , and styled with Bootstrap. MySQL is used as the database to store user information and User login information and booking details.


3. Installation:
Before proceeding with the installation, ensure that you have PHP, MySQL, and a web server (e.g., Apache) installed on your system.

             1) Clone the repository from GitHub using fllowing link:
                        https://github.com/IT20056384/SWT22022-Mini_Project_Hospital_Management_System.git  

             2)Navigate to the project directory
                        cd SWT22022-Mini_Project_Hospital_Management_System

   	         3)Import the database schema:
                        Open XAMPP or WAMP server
                        Create a database with name hospitalSystems and migrate it(php artisan migrate).
                        


4. Usage:
Once the installation is complete, you can run the application using a local server like XAMPP or WAMP.
php artisan serve


5.Funtionality

Patient :  Registration
           login
           Make an appointment
           Can be subscribe the website
           Can be asking any question about the system(Using contact)

Doctor  :  Registration
           login
           View the booking

Employee : Registration
           login
           Edit the booking
           Delete the booking

