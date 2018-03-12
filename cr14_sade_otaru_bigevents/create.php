<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD  |  Add Event</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Add Event</legend>
 
    <form action="actions/a_create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Event’s name</th>
                <td><input type="text" name="first_name" placeholder="Event’s name" /></td>
            </tr>
            <tr>
                <th>Event’s date and time</th>
                <td><input type="datetime-local" name="first_name" placeholder="Event’s date and time" /></td>
            </tr>
            <tr>
                <th>Event’s description</th>
                <td><input type="text" name="first_name" placeholder="Event’s description" /></td>
            </tr>
            <tr>
                <th>Event’s image</th>
                <td><input type="text" name="first_name" placeholder="Event’s image" /></td>
            </tr>
            <tr>
                <th>Event’s capacity</th>
                <td><input type="text" name="first_name" placeholder="Event’s capacity" /></td>
            </tr>
            <tr>
                <th>Event’s contact e-mail</th>
                <td><input type="text" name="first_name" placeholder="Event’s contact e-mail" /></td>
            </tr>
            <tr>
                <th>Event’s contact phone number</th>
                <td><input type="text" name="first_name" placeholder="Event’s contact phone number" /></td>
            </tr>
            <tr>
                <th>Event’s address</th>
                <td><input type="text" name="first_name" placeholder="Event’s address" /></td>
            </tr>
            <tr>
                <th>Event’s URL</th>
                <td><input type="text" name="first_name" placeholder="Event’s URL" /></td>
            </tr>
            <tr>
                <th>Event’s type</th>
                <td><input type="text" name="first_name" placeholder="Event’s type" /></td>
            </tr>
            
            <tr>
                <td><button type="submit">Insert event</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>