<?php
$host = "localhost"; 
$user = "root";      
$password = "";          
$dbname = "email";   
$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_error) {
    die("Bağlantı hatası " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];


    $mail_kontrolu = "SELECT * FROM subscribers WHERE email = '$email'";
    $result = $conn->query($mail_kontrolu);

 

    if ($result->num_rows > 0) {
        echo "<script>alert('$email mail bültenimize daha önce kaydedilmiş!');</script>";
    } 
    
    else {
  
        $ekleme_querysi = "INSERT INTO subscribers (email) VALUES ('$email')";
        
        if ($conn->query($ekleme_querysi) === TRUE) {
            echo "<script>alert('$email mail bültenimize kaydedildi!');</script>";
        } 
        
        else {
            echo "Hata meydana geldi: ".$conn->error;
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luxury Hotels</title>
        <link rel="stylesheet" href="gallery.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.typekit.net/wux4zzq.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/6a389e79c0.js" crossorigin="anonymous"></script>
    </head>
<body>
    <section class="gallery-page-header">
        <header>
            <div class="logo">
                <span>LUXURY</span>
                <span>HOTELS</span>
            </div>
            <nav>
                <ul class="header-nav">
                    <li><a href="../Home/Home.php">Anasayfa</a></li>
                    <li><a href="../Facilities/Facilities.php">İmkanlar</a></li>
                    <li><a href="../Rooms/rooms.php">Odalar</a></li>
                    <li class="active-tab"><a href="../Gallery/gallery.php">Galeri</a></li>
                    <li><a href="../ContactUs/contact.php">İletişim</a></li>
                </ul>
            </nav>
        </header>
        <div class="text">
            GALERİ
        </div>
    </section>


    <div class="body">
        <section class="gallery-content" id="body">
            <img src="../assets/images/11.jpg" alt="image1">
            <img src="../assets/images/22.jpg" alt="image2">
            <img src="../assets/images/33.jpg" alt="image3">
            <img src="../assets/images/44.jpg" alt="image4">
            <img src="../assets/images/55.jpg" alt="image5">
            <img src="../assets/images/66.jpg" alt="image6">
            </div>
        </section>

        

        
        <footer class="footer">
            <div class="footer-triangle"></div>
            <div class="footer-container">
            <div class="footer-column footer-column-1">
                <h3><span>LUXURY</span><span>HOTELS</span></h3>
                <p>Mustafa Kemal Atatürk, Yeni Foça Limanı, 35680 Foça/İzmir</p>
                <div>
                    <p>+90 536 263 65 02</p>
                    <p>erkimberk@hotmail.com</p>
                </div>
            </div>
            <div class="columns-wrapper">
                <div class="footer-column footer-column-2">
                    <ul>
                        <li><a href="../Home/Home.php">Hakkımızda</a></li>
                        <li><a href="../ContactUs/contact.php">İletişim</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Terms_of_service" target="_blank">Hüküm ve Koşullar</a></li>
                    </ul>
                </div>
                <div class="footer-column footer-column-3">
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f" style="color: #ffffff; "></i> Facebook</a></li>
                        <li><a href="https://x.com/home?lang=tr" target="_blank"><i class="fa-brands fa-twitter" style="color: #ffffff;"></i> Twitter</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-column footer-column-4">
                <div class="footer-column-4-wrapper">
                    <h4>Subscribe to our newsletter</h4>
                    <div class="email-input-container">
                        <form action="" method="POST" id="newsletter">
                            <input type="email" placeholder="Email Address" class="email-input" required name="email" id="email"/>
                            <button type="submit" class="email-button" >OK</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </footer>
        <script src="script.js"></script>
</body>
</html>