<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinple calculator</title>
</head>
<body>
    <div id="error"></div>
    <form name="form" onsubmit="return validate()" action="calculator.php">
        <input type="text" name="num1" id="num1" placeholder="Number1">
        <input type="text" name="num2" id="num2" placeholder="Number2">
        <select name="operator" id="">
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <br>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "Add":
                    $result = $result1 + $result2;
                    echo $result1."+".$result2."=".$result;
                break;
                case "Subtract":
                    $result = $result1 - $result2;
                    echo $result1."-".$result2."=".$result;
                break;
                case "Multiply":
                    $result=$result1 * $result2;
                    echo $result1."*".$result2."=".$result;
                break;
                case "Divide":
                    $result=$result1 / $result2;
                    echo $result1."/".$result2."=".$result;
                break;
            }
        }
    ?>



    <script>
        function validate(){
            var num1 = document.form.num1.value;
            var num2 = document.form.num2.value;
            if(isNaN(num1) || isNaN(num2)){
               document.getElementById("error").innerHTML="Enter Numeric value only";
               return false;
            }else{
                return true
            }
        }
        
    </script>


</body>
</html>