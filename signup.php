<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fottball club website">
    <meta name="author" content="John Theri">

    <title>KESA - signup</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <?php
echo date(DATE_RFC822)."<br>";
                         include 'conn.php';
//The isset function helps post the infomation entered by the user into the database.                            
                            if (isset($_POST['register'])){
                               $fullname =$_POST['fullname'];
                               $username =$_POST['uid'];
                               $email =$_POST['email'];
                               $pwd =$_POST['pwd'];   
                               $pwdrepeat=$_POST['pwdrepeat'];
                                $loginas=$_POST['player'||'fun'||'guest'];
                               $epwd=md5($pwd);


//The variables are declaired and fullname,username,email and password are entered into the database.  


                                          $sql = "INSERT INTO  football (fullname, uid, email, pwd)
                                            VALUES ('$fullname', '$username', '$email', '$epwd')";
                                            if (mysqli_query($conn, $sql)) {
                                              echo "New information saved successfully";
                                              header("Refresh:3; url=login.php");
                                             
                                             } 
                                                else {
                                              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                            }

                                            mysqli_close($conn);
                                        }



                            ?>


                            <form class="user"  method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="Fullname" name="fullname"placeholder="Enter your full name" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="Username"
                                          name="uid"  placeholder="Enter your username" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="pwd" placeholder="Password" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" name="pwdrepeat" placeholder="Repeat Password" required="">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                                <lable>login as:<br></lable> 
                                                <input type="radio" name="loginas" value="player">Player<br>
                                                <input type="radio" name="loginas"value="fun" >Fun<br>
                                                <input type="radio" name="loginas"value="guest">Guest<br>
                                                </div>

                                </div>
                                 <button class="btn btn-primary btn-user btn-block" type="submit" name="register">
                                    Register Account</button>
                               
                                <hr>
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block" >
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>