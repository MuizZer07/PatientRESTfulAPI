<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Patient RESTful API | Documentation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #ffffff;
            color: #000000;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            width: 170vh;
        }

        .title {
            font-size: 84px;
            color: #000000;
        }

        .links > a {
            color: #000000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .docs{
            text-align: left;
        }

        td, th {
            border: 1px solid #000000;
            text-align: left;
            font-weight: 600;
            color: #000000;
            padding: 8px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <hr>
        <div class="title m-b-md">
            User Documentation
        </div>
        <hr>
        <h1 style="color: #000000"> Patient RESTful API v1 </h1>
        <hr><hr>
        <div class="links">
            <a href="#overview">Overview</a>
            <a href="#user">Users</a>
            <a href="#admin">Admin</a>
            <a href="#developer">Developers</a>
        </div>


        <hr><hr>

        <div class="docs">
            <div id="overview">
                <h2 style="color: #000000"> Overview:</h2>
                <hr><hr>
                    Simple RESTful API to retrieve data (Role and Permission based CRUD operation). The system has basic API authentication
                    (Login and Registration) and data can be retrieved using an api token. Three different roles are implemented e.g Admin,
                    User and Developer. Admin has all the roles by default including CRUD for patients, user, role, permission models.
                    Registration gives a new user "normal user" role which has only permission for single CRUD operation on patients table.
                    Admin can assign users "Admin" or "Developer" role and specific permission.
                <hr><hr>
            </div>

            <div id="user">
                <h2 style="color: #000000"> API List (Common for all roles):</h2>
                <table>
                    <tr>
                        <th>Functionality</th>
                        <th>Endpoint</th>
                        <th>Method Type</th>
                        <th>Parameter</th>
                        <th>Response</th>
                    </tr>
                    <tr>
                        <td>User Login</td>
                        <td>api/v1/login</td>
                        <td>POST</td>
                        <td>email (string), password (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of user model, contains api_token), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>User Registraion</td>
                        <td>api/v1/register</td>
                        <td>POST</td>
                        <td>email (string), password (string), name (string), password_confirmation (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of user model, contains api_token), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>User Logout</td>
                        <td>api/v1/logout</td>
                        <td>POST</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View All Patients</td>
                        <td>api/v1/patients</td>
                        <td>GET</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json array: array of dictionaries of patient models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View Patients Report With Filtering Options</td>
                        <td>api/v1/patients/reports</td>
                        <td>GET</td>
                        <td>api_token (string), start (integer: start index), length (integer: number of data to fetch), condition (json: key-value pair for matching fields), order_by (json: key-value pair where key contains field name and value contains order string such as 'Asc' for ascending order, 'Desc' for descending order)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json array: array of dictionaries of patient models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View Patient's Information</td>
                        <td>api/v1/patients/{patient}</td>
                        <td>GET</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of patient model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add New Patient</td>
                        <td>api/v1/patients</td>
                        <td>POST</td>
                        <td>api_token (string), first_name (string), last_name (string), age (integer), on_medication (boolean), address (string), phone_no (string), symptoms (string), occupation (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of patient model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add Multiple Patients (Batch Operation)</td>
                        <td>api/v1/batch_create</td>
                        <td>POST</td>
                        <td>api_token (string), patients (array of json objects: containing information of each patients)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Edit Patient</td>
                        <td>api/v1/patients/{patient}</td>
                        <td>PUT</td>
                        <td>api_token (string), first_name (string), last_name (string), age (integer), on_medication (boolean), address (string), phone_no (string), symptoms (string), occupation (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of patient model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Edit Multiple Patients (Batch Operation)</td>
                        <td>api/v1/batch_update</td>
                        <td>PUT</td>
                        <td>api_token (string), patients (array of json objects: containing information of each patients)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Delete Patient</td>
                        <td>api/v1/patients/{patient}</td>
                        <td>DELETE</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Delete Multiple Patients (Batch Operation)</td>
                        <td>api/v1/batch_create</td>
                        <td>DELETE</td>
                        <td>api_token (string), patients (array of json objects: containing information of each patients)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Get Personal Information</td>
                        <td>api/v1/user</td>
                        <td>GET</td>
                        <td></td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of user model), message (string: Response Description)</td>
                    </tr>
                </table>
            <hr><hr>
            </div>
            <div id="admin">
                <h2 style="color: #000000"> Admin Role API List:</h2>
                <table style="width:100%">
                    <tr>
                        <th>Functionality</th>
                        <th>Endpoint</th>
                        <th>Method Type</th>
                        <th>Parameter</th>
                        <th>Response</th>
                    </tr>
                    <tr>
                        <td>View All User of the System</td>
                        <td>api/v1/admin/user</td>
                        <td>GET</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json array: array of dictionaries of user models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View User's Report With Filtering Options</td>
                        <td>api/v1/admin/user/reports</td>
                        <td>GET</td>
                        <td>api_token (string), start (integer: start index), length (integer: number of data to fetch), condition (json: key-value pair for matching fields), order_by (json: key-value pair where key contains field name and value contains order string such as 'Asc' for ascending order, 'Desc' for descending order)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json array: array of dictionaries of user models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add New User</td>
                        <td>api/v1/admin/user</td>
                        <td>POST</td>
                        <td>api_token (string), name (string), email (string), password (string), role (integer: 1 is admin, 2 is normal user, 3 is developer)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of user model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Edit User</td>
                        <td>api/v1/admin/user/{user}</td>
                        <td>PUT</td>
                        <td>api_token (string), name (string), email (string), password (string), role (integer: 1 is admin, 2 is normal user, 3 is developer) </td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of user model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Delete User</td>
                        <td>api/v1/admin/user/{patient}</td>
                        <td>DELETE</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add new permission to a user</td>
                        <td>api/v1/admin/user/permission/add</td>
                        <td>POST</td>
                        <td>api_token (string), user_id (integer: id for the specific user), permission_id (integer: id for permission to add)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add new permission to a user</td>
                        <td>api/v1/admin/user/permission/{permission_role}</td>
                        <td>DELETE</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View All Permission of the System</td>
                        <td>api/v1/admin/permission</td>
                        <td>GET</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json array: array of dictionaries of permission models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>View Specific Permission</td>
                        <td>api/v1/admin/permission/{permission}</td>
                        <td>GET</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of permission models), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Add New Permission</td>
                        <td>api/v1/admin/permission</td>
                        <td>POST</td>
                        <td>api_token (string), name (string), code (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), data (json: dictionary of permission model), message (string: Response Description)</td>
                    </tr>
                    <tr>
                        <td>Delete Permission</td>
                        <td>api/v1/admin/permission/{permission}</td>
                        <td>DELETE</td>
                        <td>api_token (string)</td>
                        <td>status (boolean: Returns True if response ok), model (string: Name of model class which is invoked), message (string: Response Description)</td>
                    </tr>
                </table>
                <hr><hr>
            </div>

            <div id="developer">
                <h2 style="color: #000000"> Developer Role API List:</h2>
                <table style="width:100%">
                    <tr>
                        <td>Not available in v1. Coming Soon..</td>
                    </tr>

                </table>
                <hr><hr>
            </div>
        </div>
    </div>
</div>
</body>
</html>
