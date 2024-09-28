<!DOCTYPE html>
<html long = "en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="output.php" method="POST">
        <div>
            <label for="username">username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        </div>
        <div>
        <label for="password">Password</label>
        <input type="text" name="password" id="password">
        </div>
    </form>
    <?php
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($email !=""){
            echo "User Email is", $email, "<br>";
        } else {
            echo "field is empty";
        }
        if ($username !=""){
            echo "User Username is", $username, "<br>";
        } else {
            echo "field is empty";
        }
        if ($password !=""){
            echo "User Password is", $password, "<br>";
        } else {
            echo "field is empty";
        }


    } 
    ?>
</body>
</html>