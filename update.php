<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, name='$name', email='$email', mobile='$phone', password='$password' where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class = "container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <div class="mb-2"></div>
    <label class="form-text" for="name">Enter your name here</label>
    <div class="mb-2"></div>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="name" autocomplete="off" value="<?php echo $name; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <div class="mb-2"></div>
    <label class="form-text" for="email">Enter your email here</label>
    <div class="mb-2"></div>
    <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="<?php echo $email; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Phone number</label>
    <div class="mb-2"></div>
    <label class="form-text" for="phone">enter your phone number here</label>
    <div class="mb-2"></div>
    <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" value="<?php echo $phone; ?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <div class="mb-2"></div>
    <label class="form-text" for="password">Enter your password here</label>
    <div class="mb-2"></div>
    <input type="password" class="form-control" id="password" name="password" autocomplete="off" value="<?php echo $password; ?>">
  </div>

  <button type="submit" class="btn btn-primary" name = "submit" >Update</button>
</form>
    </div>
</body>
</html>
