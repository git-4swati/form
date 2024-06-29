<?php>
 $nameerror="";
 $PasswordError="";
 if(isset($_POST['Submit'])){
    $username = $_POST['username'];
    $Password = $_POST['Password'];
    is(empty($username)){
        $nameerror="</br>Name is required";}
        else{
            $username=trim($username);
            $username=htmlspecialchars($username);
            if(!preg_match( "/^[a-zA-Z]+$/", $username)){
                $nameerror="</br>name should contain space and char";
            }
            
        }
        is(empty($Password)){
            $PasswordError="</br>Password is required";}
            else {
                if(strlen($Password)){
                    $PasswordError ="</br>at least 8  digits";
                }elseif(!preg_match("#[0-9]+#", $Password)){
                    $PasswordError ="</br>At least one digits";

                }elseif(!preg_match("#[a-z]+#", $Password)){
                    $PasswordError ="</br>At least one char";
            }elseif(!preg_match("#[A-Z]+#", $Password)){
                $PasswordError ="</br>At least one upper case";
    }
}
 }
 
<?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Style</title>
</head>
<body>
   <div class="container">
    <div class="form_container">
        <h3>Login form validation PHP</h3>
        <form method="post">
            <p>
                <label for="name">username:</label>
                <input type="text" name="username" placeholder="Enter name"/>
                <span style="color: red;"><?php echo $nameerror ?></span>
</p>
<p>
    <label for="Password">Password:</label>
    <input type="Password" name="Password" placeholder="Enter Password"/>
    <span style="color: red;"><?php echo $PasswordError ?></span>
</p>
<button name="Submit" name='Submit'> Login </button>
</form>

    
</body>
</html>