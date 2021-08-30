<?php

    // require 'classes/dbh.class.php';

    // function getUser($email, $password){

    //     $db = new Dbh();
    //     $conn = $db->connect();

    //     $sql = 'SELECT * FROM User WHERE User_Email = ? AND Password = ?';
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute([$email, $password]);

    //     $results = $stmt->fetchAll();
    //     return $results;
    // }

    // if(isset($_POST['LogInBtn'])){
        
    //     $username = $_POST['email'];
    //     $password = $_POST['password'];

    //     $res = getUser($username, $password);

    //     print_r($res);

    //     if(empty($res)){
    //         echo "nuk ka user te tille";
    //     }
    //     else{
    //         echo "sukses";
    //     }


    // }

?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_files/login.css">

    </head>
    <body>
        <div class="main">
            <div class="left-div">
                <div class="left-top">
                    <a href="login.php"><img src="pics/backBufi.svg"></a>
                </div>
                <div class="left-middle">
                    <div class="text-div">
                        <h1>Welcome to NOX</h1>
                        <h3>Your favorite products at the palm of your hands</h3>
                    </div>
                    <div class="pic-div">
                        <img src="pics/ilustrim2.svg" id="human-pic">
                    </div>
                </div>
                <div class="left-bottom">
                    <img src="pics/ilustrim1.svg">
                </div>
            </div>
            <div class="right-div">
                <div class="form">
                    <div class="top-form">
                        <img src="pics/NOX Logo.svg">
                    </div>
                    <div class="text-form">
                        <div class="top-text">
                            <h2>Log In</h2>
                        </div>
                        
                    </div>
                    <div class="input-form">
                        <form action="includes/loginVerify.php" id="loginForm" method="POST" onsubmit="return validate();"> 

                            <div class="email_input">
                                <input type="email" class="inputs" id="email" name="email" placeholder="Email" >
                                <span class="error"></span>
                            </div>
                            <div class="password_input">
                                <input type="password" class="inputs" id="password"  name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>
                            
                            <button type="submit" name="LogInBtn">Log In</button>
                          
                                <?php
                                    if(isset($_GET['error'])){
                                        if($_GET['error'] == 'userNull')
                                            echo "<p class='error'>This user doesn't exist! Check email or password again!</p>";
                                    }
                                ?>
                       
                        </form>  
                    </div>
                    <div class="bottom-text">
                            <p>Don't have an account yet?</p>
                            <a class="orange-text" href="register.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="javascript/loginJS.js"></script>
        
    </body>
</html>