### Patient RESTful API 
Webapp URL: https://rocky-oasis-24540.herokuapp.com/
Documentation for API: https://rocky-oasis-24540.herokuapp.com/documentation
Tools: Laravel 6.1, PHP 7.4, PostgreSQL Database

Simple RESTful API to retrieve data (Role and Permission based CRUD operation). 
The system has basic API authentication (Login and Registration) and data can be 
retrieved using an api token. Three different roles are implemented e.g Admin, User 
and Developer. Admin has all the roles by default including CRUD for patients, user,
role, permission models. Registration gives a new user "normal user" role which has 
only permission for single CRUD operation on patients table. Admin can assign users 
"Admin" or "Developer" role and specific permission.
