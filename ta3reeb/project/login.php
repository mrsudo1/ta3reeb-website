<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username != 'admin' && $password != 'admin123') {

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Incorrect username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>تسجيل دخول</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Helvetica, Arial, sans-serif;
}

body{
    background:#f0f2f5;
}

.container{
    width:100%;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    gap:120px;
    padding:20px;
}

.left{
    max-width:500px;
}

.left h1{
    color:#1877f2;
    font-size:60px;
    margin-bottom:10px;
}

.left p{
    font-size:28px;
    color:#1c1e21;
    line-height:1.3;
}

.login-box{
    width:400px;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 2px 15px rgba(0,0,0,0.15);
}

.login-box input{
    width:100%;
    padding:14px;
    margin-bottom:15px;
    border:1px solid #dddfe2;
    border-radius:6px;
    font-size:17px;
    outline:none;
}

.login-box input:focus{
    border-color:#1877f2;
    box-shadow:0 0 0 2px rgba(24,119,242,0.2);
}

.login-btn{
    width:100%;
    padding:14px;
    background:#1877f2;
    color:white;
    border:none;
    border-radius:6px;
    font-size:20px;
    font-weight:bold;
    cursor:pointer;
}

.login-btn:hover{
    background:#166fe5;
}

.forgot{
    display:block;
    text-align:center;
    margin:15px 0;
    color:#1877f2;
    text-decoration:none;
    font-size:14px;
}

.line{
    height:1px;
    background:#dadde1;
    margin:20px 0;
}

.create-btn{
    display:block;
    width:60%;
    margin:auto;
    padding:14px;
    background:#42b72a;
    color:white;
    text-align:center;
    border-radius:6px;
    text-decoration:none;
    font-size:17px;
    font-weight:bold;
}

.create-btn:hover{
    background:#36a420;
}

.error{
    background:#ffebee;
    color:red;
    padding:10px;
    border-radius:6px;
    margin-bottom:15px;
    text-align:center;
}

@media(max-width:900px){

    .container{
        flex-direction:column;
        text-align:center;
        gap:40px;
    }

    .left h1{
        font-size:50px;
    }

    .left p{
        font-size:22px;
    }

}

</style>

</head>
<body>

<div class="container">

    <div class="left">
        <h1>موقع تعريب</h1>
        <p>مرحبا بك في موقع تعريب لاستخراج ملفات الترجمة  </p>
    </div>

    <div class="login-box">

        <?php
            if(isset($error)){
                echo "<div class='error'>$error</div>";
            }
        ?>

        <form action="" method="post">

            <input type="email" name="username" placeholder="Email address" required>

            <input type="password" name="password" placeholder="Password" required>

            <button class="login-btn" type="submit">Log in</button>

            

        </form>

    </div>

</div>

</body>
</html>