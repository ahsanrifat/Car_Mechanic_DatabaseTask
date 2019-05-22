# Car_Mechanic_DatabaseTask
Small MYSQL and PHP task (Course Assignment)
CSE 391: Programming for the Internet
Assignment 3: PHP and mySQL Project

-----------------------------------PROBLEM-----------------------------------


There is a car workshop where there are around 5 senior mechanics works. And each mechanic is allowed to get assign on maximum 4 active cars(clients) everyday. So whenever a mechanic is occupied with maximum no. of client’s car the manager assigns the next car to the other mechanic whoever is free. For this reasons clients are not getting their desire mechanics whom they want to investigate their car and sometimes a chaos occurs.
So now the management plans to build an online appointment system where the client can go to the link of the application select their desire mechanic and get the appointment if he is already not occupied without coming to workshop physically.
The system should have 2 parts.


-----------------------------------
1. User Panel
a. A client visiting to the web application should be able to entry their Name, Address, Phone, Car License number, Car Engine Number, appointment date and can select their desire mechanic from the list of the available mechanics.
2. Admin Panel
a. Admin can see the list of the appoints
i. In the list table admin should able to see the client name, phone, Car registration number, appointment date, and mechanic name.
b. If admin wants he can change the date of appointment and also the assigned mechanic name with any other available mechanic for any specific client.
The submitted data should be stored in a database which is maintained on a server. The webpage and the server should communicate with each other at every step of the appointment process. The list of the mechanic should show how many free places are available for each mechanic. After a client makes data submission, it should check whether the client has already taken any appointment from any mechanic on certain date or not. If not, then the client is allowed to take an appointment otherwise s/he will be notifying that he has already taken an
appointment on that specific date. And also if the mechanic is occupied with maximum no. of appointment the system should notify client otherwise it will approve the appointment.
ASSIGNMENT
For your assignment, you are to write an Appointment webpage using HTML, CSS, JavaScript, PHP and mySQL.


--------------------------------------------------Part 1 (70 pts)--------------------------------------


The database must fully implement the appointment process, maintaining the submitted information. The server and page behavior must meet the requirements listed above. In addition, (basic) help facilities should be provided. The separate page for the Admin should also be working so that s/he can see the client Appointment List.


--------------------------------------------------Part 2 (30 points)----------------------------------------


The specific look and feel of the pages as well as the database implementation is left intentionally vague, allowing considerable design freedom on your part. However, the page should have a nice look and the code should satisfy common standards. You may also add additional features to your page. For example, you can add JavaScript and/or PHP functions which can validate the name, phone, car license no., car engine no., appointment date (for example, that the field isn't empty), phone, car engine no. (that it has only number in it), Appointment date (that it has only date in it), must select a mechanic from the list to ensure the entry.
