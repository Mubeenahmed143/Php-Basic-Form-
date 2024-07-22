<?php 

include('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $num = $_POST['number'];
    $img = $_FILES['image']['name'];
    $tmp_img = $_FILES['image']['tmp_img']; 

    $insert = "INSERT INTO `user_form`(`user_name`, `password`, `email`, `number`, `image`) 
    VALUES ('$name','$password','$email','$num ','$img')";


$connection = mysqli_query($connect, $insert);

move_uploaded_file($tmp_img, 'image/' . $img);

    if($connection){
        echo '<script>
        alert("User add successfully")
        </script>';
    }

}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form method="POST"  enctype="multipart/form-data">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control item" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control item" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control item" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="number" class="form-control item"  placeholder="Phone Number" required>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control item"  required >
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Create Account" class="btn btn-block create-account">
            </div>
        </form>
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
