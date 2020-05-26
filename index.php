<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="numerator"><br>
    Divide
    <br>
    <input type="text" name="denominator"><br>
    <input type="submit" value="Result">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numerator = $_POST["numerator"];
    $denominator = $_POST["denominator"];
    function divide($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Có lỗi xảy ra số chia phải khác 0");
        }
        else{
            return $numerator/$denominator;
        }
    }
    try {
        echo divide($numerator, $denominator);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
</body>
</html>