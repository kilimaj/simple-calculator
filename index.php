<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinple calculator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number1">
        <input type="text" name="num2" placeholder="Number2">
        <select name="operator" id="">
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br><br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>


    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "Add":
                    $result=$result1 + $result2;
                    echo $result1."+".$result2."=".$result;
                break;
                case "Subtract":
                    $result=$result1 - $result2;
                    echo $result1."+".$result2."=".$result;
                break;
                case "Multiply":
                    $result=$result1 + $result2;
                    echo $result1."+".$result2."=".$result;
                break;
                case "Divide":
                    $result=$result1 + $result2;
                    echo $result1."+".$result2."=".$result;
                break;
            }
        }
    ?>
</body>
</html>