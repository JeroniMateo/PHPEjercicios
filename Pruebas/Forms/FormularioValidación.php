<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <?php
    $nameErr = $lastnameErr = $emailErr = $passwordErr = $commentErr = $ageErr = "";
    $name = $lastname = $email = $password = $comment = $age = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["lastname"])){
            $lastnameErr=" ";
        }else{
            $lastname = test_input($_POST["lastname"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "Email is required";
        }else{
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["age"])){
            $age = "";
        }else{
            $age = test_input($_POST["age"]);
        }

        if(empty($_POST["lastname"])){
            $commentErr=" ";
        }else{
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["lastname"])){
            $passwordErr=" password is required";
        }else{
        $password = test_input($_POST["password"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h1>Formulario de validación</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <label style="color: red;">* required field</label> <br>
        <label>Name:</label> <input type="text" name="name">
        <span  style="color: red;">* <?php echo $nameErr;?></span>
        <br>
        
        <label>Lastname:</label> <input type="text" name="lastname">
        <span class="error" style="color: red;">  <?php echo $lastnameErr;?></span>
        <br>
        
        <label>E-mail:</label> <input type="text" name="email">
        <span class="error" style="color: red;">* <?php echo $emailErr;?></span>
        <br>
        
        <label>Age:</label> <input type="number" name="age">
        <span class="error" style="color: red;"> <?php echo $ageErr;?></span>
        <br>
        
        <label>Comment:</label> <textarea name="comment" rows="5" cols="40"></textarea>
        <span class="error" style="color: red;">  <?php echo $commentErr;?></span>
        <br>
        
        <label>Password:</label><input type="password" name="password">
        <span class="error" style="color: red;">* <?php echo $passwordErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">




    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $age;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $password;
    ?>

</body>

</html>