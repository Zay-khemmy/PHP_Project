<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
    <form action="calculate.php" method="GET">
        A
        <input type="text" name="a">  <br>
        B
        <input type="text" name="b">  <br>
        Action
        <select name="operation">
            <option value="">Please select</option>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select> <br>
        <!-- <input type="hidden" name="calculator" value="1" /> -->
        <input type="submit" value="Calculate" name="calculator">
    </form>
</body>
</html>