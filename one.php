<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email">
        <br>
        <label for="sv">Section Visited: </label>
        <input type="text" name="sv">
        <br>

        <label for="feed">Feedback: </label>
        <input type="text" name="feed">
        <br>
        <input type="submit" value="submit" name="sub">
    </form>
    <br><br>
    <?php
        if(isset($_POST["sub"])){
            echo "<h3> Thankyou for your feedback</h3>";
            echo "Name: " . $_POST["name"] . "<br>";
            echo "Email: " . $_POST["email"] . "<br>";
            echo "Section visited: " . $_POST["sv"] . "<br>";
            echo "Feedback: " . $_POST["feed"] . "<br>";

        }
    ?>
</body>
</html>
