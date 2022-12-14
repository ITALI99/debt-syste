<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
* {
  margin: 0;
  padding: 0;
}

html {
  background: url("r1.jpg") no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {
  
  background: transparent;
}

body,
input,
button {
  font-family: "Source Sans Pro", sans-serif;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;
}
.login .heading {
  text-align: center;
  margin-top: 1%;
}
.login .heading h2 {
  font-size: 3em;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.7);
  display: inline-block;
  padding-bottom: 5px;
  text-shadow: 1px 1px 3px #23203b;
}
.login form .input-group {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.login form .input-group:last-of-type {
  border-top: none;
}
.login form .input-group span {
  background: transparent;
  min-width: 53px;
  border: none;
}
.login form .input-group span i {
  font-size: 1.5em;
  color: rgba(255, 255, 255, 0.2);
}
.login form input.form-control {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
  padding: 10px;
  font-size: 1.6em;
  width: 100%;
  background: transparent;
  color: #c2b8b1;
}
.login form input.form-control:focus {
  border: none;
}
.login form button {
  margin-top: 20px;
  background: #27ae60;
  border: none;
  font-size: 1.6em;
  font-weight: 300;
  padding: 5px 0;
  width: 100%;
  border-radius: 3px;
  color: #b3eecc;
  border-bottom: 4px solid #1e8449;
}
.login form button:hover {
  background: #30b166;
  -webkit-animation: hop 1s;
  animation: hop 1s;
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

.float:hover,
.float:focus,
.float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}

/* Large Devices, Wide Screens */
@media only screen and (max-width: 1200px) {
  .login {
    width: 600px;
    font-size: 2em;
  }
}
@media only screen and (max-width: 1100px) {
  .login {
    margin-top: 2%;
    width: 600px;
    font-size: 1.7em;
  }
}
/* Medium Devices, Desktops */
@media only screen and (max-width: 992px) {
  .login {
    margin-top: 1%;
    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}
/* Small Devices, Tablets */
@media only screen and (max-width: 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}
/* Extra Small Devices, Phones */
@media only screen and (max-width: 480px) {
  .login {
    margin-top: 0;
    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
  .login h2 {
    margin-top: 0;
  }
}
/* Custom, iPhone Retina */
@media only screen and (max-width: 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}

 

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R-H-T</title>
</head>
<body >

<?php 
if(isset($_SESSION['check'])===true){
echo '<div class="login">
<div class="heading">
  <h2>R-H-T</h2>
 <br>
  <h2>ADD ADMIN</h2>
  <br>
  <br>
  <form method="POST">

    <div class="input-group input-group-lg">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      <input type="text" class="form-control" placeholder="Username " name="name" required>
        </div>

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
      </div>

      <button type="submit" class="float" name="addadmin">Add Admin</button>
     </form>
     <br>
     <a href="home.php">
     <button type="button" class="float" style="  margin-top: 20px;
background: #27ae60;
border: none;
font-size: 1.6em;
font-weight: 300;
padding: 5px 0;
width: 100%;
border-radius: 3px;
color: #b3eecc;
border-bottom: 4px solid #1e8449;
background: #30b166;
-webkit-animation: hop 1s;
animation: hop 1s;
" >BACK TO HOME</button></a>
       </div>
</div>  ';
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=rafid;charset=utf8;",$username,$password);
if(isset($_POST['addadmin'])){
  $get_username=$_POST['name'];
  $get_password=$_POST['password'];
  $check_admin=$database->prepare("SELECT * FROM `admin` WHERE admin = :admin");
  $check_admin->bindParam("admin", $get_username);
  $check_admin->execute();
  if($check_admin->rowCount()>0){
    echo '<div class="container" style="  margin-top: 20px;
    font-size: 1.6em;
    font-weight: 300;
    padding: 5px 0;
    width: 300PX;
    border-radius: 3px;
"><div class="alert alert-danger " role="alert">
THIS ADMIN ALREADY ADDED!
</div></div>';
  }else{
    $add_admin=$database->prepare("INSERT INTO `admin` ( `admin`, `password`) VALUES (:admin , :password)");
    $add_admin->bindParam("admin", $get_username);
    $add_admin->bindParam("password",$get_password);
    if($add_admin->execute()){
      echo '<div class="container" style="  margin-top: 20px;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 300PX;
      border-radius: 3px;
"><div class="alert alert-success"  role="alert">
ADMIN ADDED SECCESS!
</div></div>';
    }else{
   echo   '<div class="container" style="  margin-top: 20px;
   font-size: 1.6em;
   font-weight: 300;
   padding: 5px 0;
   width: 300PX;
   border-radius: 3px;
"><div class="alert alert-danger " role="alert">
THERE IS WRONG WITH SYSTEM!
</div></div>';
    }

  }
}
}else{
  echo "<script> location.replace('index.php') </script>";
}
$dellet_admin=$database->prepare("SELECT * FROM `admin`");
$dellet_admin->execute();
foreach($dellet_admin as $data){
  echo '<ul class="list-group container"  style="  margin-top: 20px;
  font-size: 1.6em;
  font-weight: 300;
  padding: 5px 0;
  width: 500PX;
  border-radius: 3px;
  
">
  <li class="list-group-item list-group-item-info"> ' . $data['admin'] . '<form  method="post" >    <button  type="submit" class="float" style="  margin-top: 0px;
  background: #27ae60;
  border: none;
  font-size: 1.0em;
  font-weight: 300;
  padding: 0px 0;
  width: 25%;
  border-radius: 3px;
  color: #b3eecc;
  border-bottom: 4px solid #1e8449;
  background: #30b166;
  -webkit-animation: hop 1s;
  animation: hop 1s;
  " value="' . $data['id'] . '"name="kickout">KICK OUT</button></form></li>
  </ul>
  ';
}
if(isset($_POST['kickout'])){
  $value=$_POST['kickout'];
  $kick_out=$database->prepare("DELETE FROM admin WHERE `admin`.`id` = $value");
  $kick_out->execute();
  echo("<meta http-equiv='refresh' content='1'>");
}
?>

</body>
</html>