<?php

    include("db.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_post['Update'])){
        $first = $_POST['firstname'];
        $last  = $_POST['lastname'];
        $email = $_POST['email'];
        $pass  = $_POST['password'];
        $month = $_POST['month'];
        $day   = $_POST['day'];
        $year  = $_POST['year'];
        $gender= $_POST['gender'];
    
        $Q = "UPDATE face SET `firstname`='$first', `lastname`='$last',
            `email`='$email', `password`='$password',`month`='$month', 
            `day`='$day', `year`='$year', `gender`='$gender'";
        mysqli_query($con, $Q);
}
    $user_id = $_GET['id'];
    $query = "SELECT * FROM face WHERE id = '$user_id'";
    $result = mysqli_query($connection, $query);
    $user_data = mysqli_fetch_array($result);


?>
<div class="bo">
<link rel="stylesheet" href="css/style.css">
<div class="edit">
<h1 id="alk"><a href="alluser.php"> Prevues All User</a></h1>
<div class="tr">
<form action="" method="post">
    firstname <input type="text" name="firstname" id="inp" value="<?php echo $user_data['firstname'];?>"> <br> <br>
    lastname  <input type="text" name="lastname" id="inp" value="<?php echo $user_data['lastname'];?>"> <br> <br>
    email     <input type="email" name="email" id="inp" value="<?php echo $user_data['email'];?>"> <br> <br>
    password  <input type="password" name="password" id="inp" value="<?php echo $user_data['password'];?>"> <br> <br>
    month     <input type="text" name="month" id="inp" value="<?php echo $user_data['month'];?>"> <br> <br>
    day       <input type="number" name="day" id="inp" value="<?php echo $user_data['day'];?>"> <br> <br>
    year      <input type="number" name="year" id="inp" value="<?php echo  $user_data['year'];?>">  <br> <br>
    gender    <input type="text" name="gender" id="inp" value="<?php echo $user_data['gender'];?>"> <br> <br>
               <input type="submit" id="inp" value="Update">
</form>
</div>
</div>
</div>