<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- eklenti -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/iletisim.css" />
    <script src="js/iletisim.js"></script>
    <script src="fw.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet" />
    <!-- eklentinin sonu  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="indexbody">

    <nav class="navbar navbar-expand-sm shadow">
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
                    <a class="btn btn-danger rounded-pill main-btn" href="login.html">Giriş</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <div class="container" >
        <span class="big-circle"></span>
        <img src="" class="square" alt="" />
        <div class="form" id="app">
            <div class="contact-info">
                <h3 class="title">Hakkımızda</h3>
                <p class="text">
                    sakarya üniversitesinde bilgisayar mühendisliği birinci sınıf
                    öğrencesi, web teknoljileri dersin projesi.
                </p>

                <div class="info">
                    <i class="fa-solid fa-location-dot fa-lg " style="color: #d5352a;"></i>
                    <div class="information">
                        <p>Türkie / Sakarya / Sakarya üniversitesi</p>
                    </div>
                    <i class="fa-regular fa-envelope fa-lg" style="color: #d5352a;"></i>
                    <div class="information">
                        <p>izafatzakfalke@gmail.com</p>
                    </div>
                    <i class="fa-regular fa-address-book fa-lg" style="color: #d5352a;"></i>
                    <div class="information">
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Sosyal media ? </p>
                    <div class="social-icons">

                        <a href="https://twitter.com/sabur_q">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/sabur.q">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://github.com/HexaSabur" target="_blank" class="me-2 text-decoration-none">
                            <i class="fab fa-github "></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form id="contactForm" action="dis.php" method="POST" autocomplete="off">
                    <input type="hidden" name="access_key" value="1e5f455d-ac57-40e1-9863-4be7bacf0bca">
                    <h3 class="title">Bize Ulaş</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input" placeholder="Ad" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" placeholder="mail" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" placeholder="Tl" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input" placeholder="Mesaj"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="hidden" name="redirect" value="https://web3forms.com/success">
                    <div class="button-container">
                        <input type="button" value="Check" class="btn check-btn" onclick="validateForm()" />
                        <input type="button" value="Temizle" class="btn" onclick="clearForm()" />
                        <input type="button" value="Send" class="btn" @click="sendForm" />

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

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

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const app = Vue.createApp({
            methods: {
                sendForm: function () {
                    var name = document.getElementsByName("name")[0].value;
                    var email = document.getElementsByName("email")[0].value;
                    var phone = document.getElementsByName("phone")[0].value;
                    var message = document.getElementsByName("message")[0].value;

                    // Regular expression for email validation
                    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Regular expression for phone number validation
                    var phonePattern = /^05\d{9}$/;

                    if (!emailPattern.test(email)) {
                        alert("Please enter a valid email address");
                        return;
                    }

                    if (!phonePattern.test(phone)) {
                        alert("Please enter a valid phone number (starting with '05' and 11 digits long)");
                        return;
                    }
                    if (message.trim() === "") {
                        alert("Message field cannot be empty");
                        return;
                    }
                    if (name.trim() === "") {
                        alert("Username field cannot be empty");
                        return;
                    }

                    // If all fields are valid, submit the form
                    document.getElementById("contactForm").submit();
                }
            }
        });

        app.mount('#app');

        function validateForm() {
            alert("Validation function called!");
        }

        function clearForm() {
            document.getElementById("contactForm").reset();
        }
    </script>

    <script>
        function clearForm() {
            document.getElementsByName("name")[0].value = "";
            document.getElementsByName("email")[0].value = "";
            document.getElementsByName("phone")[0].value = "";
            document.getElementsByName("message")[0].value = "";
        }

        function validateForm() {
            var name = document.getElementsByName("name")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var phone = document.getElementsByName("phone")[0].value;
            var message = document.getElementsByName("message")[0].value;

            // Regular expression for email validation
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Regular expression for phone number validation
            var phonePattern = /^05\d{9}$/;

            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return;
            }

            if (!phonePattern.test(phone)) {
                alert("Please enter a valid phone number (starting with '05' and 11 digits long)");
                return;
            }

            if (message.trim() === "") {
                alert("Message field cannot be empty");
                return;
            }
            if (name.trim() === "") {
                alert("Username field cannot be empty");
                return;
            }
            // If all fields are valid, submit the form
            document.getElementById("contactForm").submit();
        }
    </script>

</body>

</html>