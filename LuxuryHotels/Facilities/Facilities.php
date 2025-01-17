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
        <link rel="stylesheet" href="Facilities.css">
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
    <section class="facilities-page-header">
        <header>
            <div class="logo">
                <span>LUXURY</span>
                <span>HOTELS</span>
            </div>
            <nav>
                <ul class="header-nav">
                    <li><a href="../Home/Home.php">Anasayfa</a></li>
                    <li class="active-tab"><a href="../Facilities/Facilities.php">İmkanlar</a></li>
                    <li><a href="../Rooms/rooms.php">Odalar</a></li>
                    <li><a href="../Gallery/gallery.php">Galeri</a></li>
                    <li><a href="../ContactUs/contact.php">İletişim</a></li>
                </ul>
            </nav>
        </header>
        <div class="header-mid">
            <div class="hotel-name">
                <span>LUXURY</span>
                <span>HOTELS</span>
                <span class="facilities-hotel-text">Rezervasyonunuzu yaptırın ve en uygun fiyatlarla lüksün keyfini çıkarın.</span>
            </div>
            <div class="button-wrapper-container">
                <div class="button-wrapper">
                    <button class="button" id="openModalBtn">
                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8333 0H15.1667V2.33333H12.8333V0Z" fill="white"/>
                            <path d="M19.8333 0H22.1667V2.33333H19.8333V0Z" fill="white"/>
                            <path d="M5.83333 0H8.16666V2.33333H5.83333V0Z" fill="white"/>
                            <path d="M26.8333 2.33331H22.1667V5.83331H19.8333V2.33331H15.1667V5.83331H12.8333V2.33331H8.16667V5.83331H5.83333V2.33331H1.16667C0.857247 2.33331 0.560501 2.45623 0.341709 2.67502C0.122916 2.89381 0 3.19056 0 3.49998L0 24.5C0 24.8094 0.122916 25.1061 0.341709 25.3249C0.560501 25.5437 0.857247 25.6666 1.16667 25.6666H26.8333C27.1427 25.6666 27.4395 25.5437 27.6583 25.3249C27.8771 25.1061 28 24.8094 28 24.5V3.49998C28 3.19056 27.8771 2.89381 27.6583 2.67502C27.4395 2.45623 27.1427 2.33331 26.8333 2.33331ZM21.4887 17.2827L19.8333 16.1V21C19.8333 21.3094 19.7104 21.6061 19.4916 21.8249C19.2728 22.0437 18.9761 22.1666 18.6667 22.1666H15.75V17.5C15.75 17.1906 15.6271 16.8938 15.4083 16.675C15.1895 16.4562 14.8927 16.3333 14.5833 16.3333H13.4167C13.1072 16.3333 12.8105 16.4562 12.5917 16.675C12.3729 16.8938 12.25 17.1906 12.25 17.5V22.1666H9.33333C9.02391 22.1666 8.72717 22.0437 8.50837 21.8249C8.28958 21.6061 8.16667 21.3094 8.16667 21V16.1L6.51146 17.2827L5.15521 15.3839L13.3219 9.5506C13.5206 9.4113 13.7573 9.33657 14 9.33657C14.2427 9.33657 14.4794 9.4113 14.6781 9.5506L22.8448 15.3839L21.4887 17.2827Z" fill="white"/>
                        </svg>
                        REZERVASYON
                    </button>
                </div>
            
            <a href="#body" class="scroll-link">
                <div class="scroll">
                    <span class="text">Kaydır</span>

                    <svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.662 61C23.6269 60.9939 16.8101 58.5566 11.366 54.1008C5.92184 49.6451 2.18493 43.4447 0.78804 36.5497C-0.608846 29.6547 0.420145 22.4888 3.70077 16.2655C6.98139 10.0421 12.312 5.14381 18.79 2.40002C26.218 -0.616 34.5347 -0.58696 41.9415 2.48086C49.3483 5.54868 55.2499 11.4087 58.37 18.7936C61.49 26.1786 61.5778 34.4949 58.6144 41.944C55.6509 49.3932 49.8744 55.3765 42.534 58.6C38.7784 60.1907 34.7405 61.007 30.662 61ZM18.439 20.755L13.422 25.655L30.262 42.1L47.103 25.65L42.086 20.75L30.262 32.3L18.439 20.755Z" fill="white"/>
                    </svg>
                </div>
            </a>
        </div>
        </div>
    </section>
    <div class="body">
        <section class="facilities-content" id="body">
            <div class="intro-text-div">
                <div class="intro-text-header">
                    İMKANLAR
                </div>
                <div class="intro-text">
                    Yeşilliklerle dolu otelimizdeki konaklamanızın gerçekten unutulmaz olmasını istiyoruz. Bu nedenle tüm ihtiyaçlarınıza özel önem veriyoruz ki size oldukça eşsiz bir deneyim sunabilelim. Lüks oteller, dinlenme için muhteşem manzaralarla mükemmel bir ortam sunarken, modern lüks tatil köyü olanaklarımız da her şeyin en iyisini yaşamanıza yardımcı olacaktır.
                </div>
            </div>
        </section>

        <section class="facilities-photos">
            <img src="../assets/images/Group44.png" alt="gym">
            <img src="../assets/images/Group45.png" alt="havuz">
            <img src="../assets/images/Group46.png" alt="spa">
            <img src="../assets/images/Group50.png" alt="yüzme havusu">
            <img src="../assets/images/Group49.png" alt="restaurant">
            <img src="../assets/images/Group53.png" alt="çamaşırhane">
        </section>

        <section class="reviews">
            <div class="reviews-header">Görüşler</div>
            <div class="reviews-content">
                <ul>
                    <li>
                        <span>"Dinlendirici ve Huzurlu – Rahatlamak ve keyif almak için mükemmel."</span>
                        <span>Erkim Berk Ünsal</span>
                    </li>
                    <li>
                        <span>“Mükemmel Bir Otel, Muhteşem Bir Deneyim”</span>
                        <span>Travis Scott</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
        
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

        <div id="Modal" class="modal">
            <div class="modal-content">
              <div class="modal-header">
                <h2>Rezervasyon</h2>
                <span class="close">&times;</span>
              </div>
              <p>Şu anda tüm odalarımız dolu. Lütfen Rezervason için arayınız: +90 536 263 65 02 </p>
            </div>
          </div>
        
          <script src="script.js"></script>

</body>
</html>