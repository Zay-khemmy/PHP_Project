<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance Form</title>
</head>
<body> 
        <!-- form to submit record -->
    <form action="attendance.php" method="POST">
        Firstname
            <input type="text" name="firstname">     <br>
        Department
            <select name="department">
                <option value=""></option>
                <option value="hr">Hr</option>
                <option value="tech">Tech</option>
                <option value="finance">Finance</option>
            </select>
          <input type="hidden" name="form_attendance" value="1" />
          <br>
          <input type="submit" value="Submit">
    </form>
    <!-- form to search record -->
    <form action="attendance.php" method="GET">
        Search:
        <input type="text" name="search">     <br>
        <input type="hidden" name="form_attendance" value="1" />
        <input type="submit" value="Search">
    </form>
</body>
</html>