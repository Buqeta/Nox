
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css_files/login.css">

    </head>
    <body>
        <div class="main">
            <div class="left-div">
                <div class="left-top">
                    <a href="index.php"><img src="pics/backBufi.svg"></a>
                </div>
                <div class="left-middle">
                    <div class="text-div">
                        <h1>Join the NOX Family</h1>
                        <h3>Your favorite products at the palm of your hands</h3>
                    </div>
                    <div class="pic-div">
                        <img src="pics/SignUpIllustration.svg" id="human-pic">
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
                            <h2>Register</h2>
                        </div>
                        
                    </div>
                    <div class="input-form">
                        <form action="includes/registerVerify.php" id="loginForm" method="POST" onsubmit="return validateRegister();"> 

                            <div class="first_name_input">
                                <input type="text" class="inputs" id="fname" name="fname" placeholder="John" >
                                <span class="error"></span>
                            </div>

                            <div class="last_name_input">
                                <input type="text" class="inputs" id="lname" name="lname" placeholder="Smith" >
                                <span class="error"></span>
                            </div>

                            <div class="email_input">
                                <input type="text" class="inputs" id="email" name="email" placeholder="johnsmith@gmail.com">
                                <span class="error"></span>
                            </div>

                            <div class="password_input">
                                <input type="password" class="inputs" id="password" name="password" placeholder="Password">
                                <span class="error"></span>
                            </div>
                            
                            <button type="submit" name="LogInBtn">Register</button>
                          
                                <?php
                                    if(isset($_GET['error'])){
                                        if($_GET['error'] == 'emptyFields')
                                            echo "<p class='error'>Fields should not be empty!</p>";
                                        else if($_GET['error'] == 'invalidFirstName')
                                            echo "<p class='error'>First name should be at least 2 letters long! No numbers are allowed!</p>";
                                        else if($_GET['error'] == 'invalidLastName')
                                            echo "<p class='error'>Last name should be at least 2 letters long! No numbers are allowed!</p>";
                                        else if($_GET['error'] == 'invalidEmail')
                                            echo "<p class='error'>Email is not valid!</p>";
                                        else if($_GET['error'] == 'invalidPassword')
                                            echo "<p class='error'>Password should have at least one capitalized letter, number and symbol!</p>";
                                        else if($_GET['error'] == 'userExists')
                                            echo "<p class='error'>An account with this email already exists! Please choose another email!</p>";
                                        else if($_GET['error'] == 'success'){
                                            echo "<p class='success'>You have registered successfully!</p>";
                                        }
                                        else{
                                            echo '<p class="success"></p>';
                                        }
                                    }
                                ?>
                       
                        </form>  
                    </div>
                    <div class="bottom-text">
                        <p>Already have an account?</p>
                        <a class="orange-text" href="login.php">Log in</a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="javascript/register.js"></script>
        
    </body>
</html>