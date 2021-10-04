<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta name="descriotion" content="Hello world the past a page">
    <title> the first page </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
 </head>
 
 <body>
    <div class="header">
        <div class="container">
            <?php
                include('init.php');
            ?>
             <!-- Start login with username and password -->
            <div class="label"><h1>facebook</h1></div>
               <div class="login">
                
                    <form action="" method="post">
                        <div class="email">
                            Email or Phone <br>
                            <input type="text" name="email"> 
                        </div>
                        <div class="pass">
                            password <br>
                            <input type="password" name="password"><br>
                            <a href="forget.php" class="link">Forgotton Account</a>                     
                        </div>
                        <input type="submit" value="Login" name="log">
                        <h4> <?php echo login_user(); ?> </h4>
                       
                    </form>
            
            </div>
            <!-- End login -->



            <div class="clear"></div>
            
            <div class="content">
                <h3>Facebook helps you connected and share with the people in your life.</h3>
                <img src="images/fb.jpg.png">
                
            </div>
            
            <!-- Start registration -->
            <div class="signup">
                
                <h1>Create an account</h1>
                <h3>it's free and always will be.</h3>
                <form action="index.php" method="POST">
                        <input type="text" name="firstname"placeholder="firstname">
                        <input type="text" name="lastname" placeholder="lastname">
                        <input type="email" name="email" placeholder="email">
                        <input type="password" name="password" placeholder="password">
                    
                        
                    <h3>Birthday</h3>

                    <?php 
                        echo "<select name='day'>";
                        echo "<option selected value='' >اليوم</option>";
                            for($day = 1; $day <= 31; $day++){
                                
                                echo "<option value='$day'>" . $day . "</option>";
                            }
                        echo "</select>";
                    
                    ?>

                    <select id="month" name="month" title="الشهر" class="months">
                       
                        <option selected value="">الشهر</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>

                    <?php  
                        echo "<select name='year'>";
                        echo "<option selected value=''>السنه </option>";
                        for($years = 1900; $years <=2020; $years++){
                            echo "<option value='$years'>  $years </option>";
                        }
                            
                        echo "</select>";
                    
                    ?>

                
                    <a href="index.php">Go To This Page Facebook</a>

                    <h3>Gender</h3>
                    <input type="radio" name="gender" value="female" checked> female
                    <input type="radio" name="gender" value="male"> male
                    <input type="radio" name="gender" value="coustom"> coustom <br>

                    <input type="submit" value="register" name="goo" $submit>

                </form>

        

                
                <p>
                    By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may
                    receive SMS notifications from us and can opt out at any time.
                </p>
                
                <button>Create an account</button>
                
                <hr>
                <a href="#" class="create">Create a Page</a> <span>for a celebrity, band or busine</span>
                
            </div>
            <!-- End registration -->            
        </div>
            
                <div class="footer">
                    <div class="footerchild">
                     (ُEnglish anotyhe#) English Arabic naigeri Portoghal ispan franci Germmniy Brazill COpa Amrica العربية
                    
                    </div>
                    <hr class="hr-footer">
                    <div class="botton-footer">
                    (ُEnglish anotyhe#) English Arabic naigeri Portoghal ispan franci Germmniy Brazill COpa Amrica العربية
                    (ُEnglish anotyhe#) English Arabic naigeri Portoghal ispan franci Germmniy Brazill COpa Amrica العربية
                    </div>
                    <div class="copy">facebook &copy 2019</div>
                </div>
    </div>

    <?php

include("conn.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['goo'])){
   // if(!empty($submit)){
    $firstname = $_POST["firstname"];
    $lastname  = $_POST["lastname"];
    $email     = $_POST["email"];
    $password  = $_POST["password"];
    $month     = $_POST["month"];
    $day       = $_POST["day"];
    $year      = $_POST["year"];
    $gender    = $_POST["gender"];

    if (empty($month)){
        echo "";
        exit;
    } 

    $SQl = "INSERT INTO `face` (`id`, `firstname`, `lastname`, `email`, `password`, `month`, `day`, `year`, `gender`) 
        VALUES(NULL, '$firstname', '$lastname', '$email', '$password', '$month', '$day', '$year', '$gender')";
    
    if(mysqli_query($con, $SQl)){
        
        echo "<h6> Data inserted successfly </h6>";
   // header("location: index.php");
}else{
    echo "<h1>no data</h1>";
}

     $cose_input = strip_tags($_POST['goo']);
    return false;

}

?>
 </body>
</html>
