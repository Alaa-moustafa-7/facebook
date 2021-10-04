<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="bb">
    <div class="search">
    <form  method="post" action="">
        <label>Search</label>
        <input type="search" name="sear0" >
        <input type="submit" value="search">

        <select name="col">
            <option>id</option>
            <option>name</option>
            <option>email</option>
        </select> <br> <br>

    </form>
    </div>
    <?php
        include('conn.php');
        if(isset($_GET['id'])){
            $user_id = $_GET['id'];
            $query = "DELETE FROM face WHERE id = '$user_id'";
            mysqli_query($con, $query);
            header("location: alluser.php");
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ser = $_POST['sear0'];
            $col = $_POST['col'];

            if($col == 'id' || $col == 'name' || $col == 'email'){
                $Q = "SELECT * FROM face WHERE $ser = $ser";
            }else{
                $Q = "SELECT * FROM face WHERE $col like '%$ser%'";
            }
            
        }else{
            $Q = "SELECT * FROM face";
        }
        
        $result = mysqli_query($con, $Q);
        if(mysqli_num_rows($result) > 0){
            echo "<table id='dd'> <tr id='tru'> <th>id</th> <th>firstname</th> <th>lastname</th> <th>email</th> 
                  <th>password</th> <th>month</th> <th>day</th> <th>year</th> <th>gender</th> <th>Delete</th>
                  <th>Edit</th> ";
            while($user = mysqli_fetch_assoc($result)){
                echo "<tr id='res'><td>" . $user["id"] . "</td><td>" . $user["firstname"] . "</td><td>" . $user["lastname"].
                     "</td><td>" . $user["email"] . "</td><td>" . $user["password"] . "</td><td>" . $user["month"].
                     "</td><td>" . $user["day"]."</td><td>" . $user["year"] . "</td><td>" . $user["gender"] . 
                     "</td><td> <a href=?id=".$user['id']."><button> Delete </button> </a></td> 
                     <td> <a href=http://localhost/project/edit.php?id=".$user['id']."><button>Edit</button></td></a></tr>";
            }
            echo "</table>";
        
        }
        

    ?>

</body>
</html>