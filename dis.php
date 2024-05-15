<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gönderilen Bilgiler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
        }
        .container p {
            font-size: 18px;
            line-height: 1.5;
        }
        .container h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gönderilen Bilgiler</h1>
        
        <?php
        // Formdan gelen verileri kontrol ediyoruz
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
        $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
        
        // Gelen bilgileri ekrana yazdırma
        echo "<p><strong>Ad:</strong> $name</p>";
        echo "<p><strong>E-posta:</strong> $email</p>";
        echo "<p><strong>Telefon:</strong> $phone</p>";
        echo "<p><strong>Mesaj:</strong> $message</p>";
        ?>
        
        <p>Teşekkürler! Form başarıyla gönderildi.</p>
    </div>
</body>
</html>
