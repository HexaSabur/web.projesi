


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
   
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../login.css" />
    <link rel="stylesheet" href="../css/iletisim.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="indexbody">





    <nav class="navbar navbar-expand-sm  shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> HexaSabur</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="CV.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgilendim.html">İlgilendim</a>
                    </li>
                </ul>
                <div>
                    <a class="btn btn-danger rounded-pill main-btn" href="login.php">Giriş</a>
                </div>
            </div>
        </div>

    </nav>
    


    <div class="container">

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
            <div class="box form-box">
            <?php 
         
         include("config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>
                <header>Sign Up</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="login.php">Sign In</a>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </div>






    <br><br>









   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <div>
        <footer class="mt-auto text-white-50 border-top border-danger pt-3">
            <div class="d-flex justify-content-between align-items-center">

                <div class="me-5">
                    bize ulaş: <a href="iletisim.html" class="text-white"> İletişim </a>
                </div>
                <div class="social-icons">
                    <a href="https://github.com/HexaSabur" target="_blank" class="me-2 text-decoration-none">
                        <i class="fab fa-github "></i>
                    </a>
                    <a href="https://twitter.com/sabur_q" target="_blank" class="me-2 text-decoration-none">
                        <i class="fab fa-twitter "></i>
                    </a>
                    <a href="https://www.instagram.com/sabur.q" target="_blank" class="me-2 text-decoration-none">
                        <i class="fab fa-instagram "></i>
                    </a>
                </div>
            </div>
            <hr class="text-danger mx-2 my-0">
        </footer>


        <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        
</body>

</html> 