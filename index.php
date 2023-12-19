<?php
  include "config.php";

  if (isset($_POST['Submit'])) {
    $firstname = $_POST['Firstname'];
    $lastname = $_POST['Lastname'];
    $email = $_POST['Email'];
    $message = $_POST['Pesan'];

    $result = mysqli_query($conn, "INSERT INTO contact(id, firstname, lastname, email, message, waktu) VALUES(NULL, '$firstname', '$lastname', '$email', '$message', NOW())");

    if ($result) {
      header("Refresh: 0");
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="assets/icon/daclogo2.png" type="image/x-icon" />

    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Hamburger -->
    <link rel="stylesheet" href="dist/css/hamburgers.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/style.css" />
    <title>Dirgantara Archery Club</title>
  </head>
  <body id="home">
    <!-- todo Navbar -->
    <div class="navbar">
      <div class="container">
        <div class="navbar-box">
          <div class="logo">
             <!-- <i class="fa-solid fa-droplet"></i> -->
            <img src="assets/icon/daclogo.png" alt=""   >
          </div>
          <ul class="menu">
            <li><a href="#home" class="nav-item" >Home</a></li>
            <li><a href="#about" class="nav-item" >About Us</a></li>
            <li><a href="#services" class="nav-item" >Services</a></li>
            <li><a href="#map" class="nav-item" >Location</a></li>
            <li><a href="#feedback" class="nav-item" >Feedback</a></li>
          </ul>

          <script>
            const navItems = document.querySelectorAll('.nav-item');

            navItems.forEach(item => {
                item.addEventListener('click', () => {
                    navItems.forEach(navItem => navItem.classList.remove('active'));
                    item.classList.add('active');

                });
            });
          </script>
          <!-- <i class="fa-brands fa-linkedin social"></i> -->
          <!-- <i class="fa-solid fa-bullseye" style="color: gray; font-size: 60px;"></i> -->
          <button class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <!-- todo Navbar -->

    <!-- todo Header -->
    <div class="header">
      <div class="header-box">
        <div class="title">
          <h1 class="animate__animated animate__jackInTheBox animate__delay-1s">
            Selamat Datang <br>Di Website <br> Dirgantara Archery Club
          </h1>
          <p class="animate__animated animate__fadeInUp animate__delay-1s" style="font-size: 18px" >
           Dirgnatara archery adalah <br> sebuah club panahan yang berdiri di tahun 2023 
          </p>
        </div>

        <div class="hero-img">
          <img src="assets/img/panahan.jpg" alt="unsplash.com" />
          <img src="assets/img/panah2.jpg" alt="unsplash.com" />
          <img src="assets/img/panah3.jpg" alt="unsplash.com" />
          <img src="assets/img/panah4.jpg" alt="unsplash.com" />
        </div>

        <div class="about" id="about">
          <div class="container">
            <h1>About Us</h1>
            <p style = "text-align: justify; font-size: 20px;">Dirgantara archery adalah sebuah club panahan yang mempunyai visi dan misi melahirkan atlet-atlet yang berkompeten, kami juga menyediakan fasilitas  pelatihan panahan dan club ini juga menjual berbagai alat yang dibutuhkan untuk panahan. <br>
            Batas minimal untuk mengikuti kelas-kelas pelatihan di club ini mulai dari 8 tahun dari berbagai divisi meliputi standar bow nasional, compound dan recurve. <br>
            Para pelatih dirgantara adalah pelatih yang profesional dalam bidangnya. <br>
            Dirgantara archery memiliki lokasi untuk dijadikan tempat latihan panahan, yaitu di Paskhas, 14, Jl.KOkrosono No.8, RT,14/RW.3,Halim Perdana Kusumah,kota Jakarta Timur.</p>

            <!-- <div class="info">
              <div class="box">
                <h3>-</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000">200+</h1>
                <button>Details</button>
              </div>
              <div class="box">
                <h3>-</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000">120+</h1>
                <button>Details</button>
              </div>
              <div class="box">
                <h3>-</h3>
                <h1 data-aos="zoom-in" data-aos-duration="1000">40+</h1>
                <button>Details</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- todo Header -->

    <!-- todo Partner -->
    <div class="partners">
      <div class="container">
        <div class="partners-box">
          <h1>-</h1>
          <h1>-</h1>
          <h1>-</h1>
          <h1>-</h1>
        </div>
      </div>
    </div>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 320">
      <path
        fill="#111111"
        fill-opacity="1"
        d="M0,256L48,250.7C96,245,192,235,288,245.3C384,256,480,288,576,282.7C672,277,768,235,864,229.3C960,224,1056,256,1152,261.3C1248,267,1344,245,1392,234.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <!-- todo Partner -->

    <!-- todo Services -->
    <div class="services" id="services">
      <div class="container">
        <div class="services-box">
          <div class="box">
            <i class="fa-solid fa-bullseye" style="color: black; font-size: 70px;" data-aos="fade-up" data-aos-duration="1000"></i>
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Services</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" style="font-size: 18px;" >Kami menyediakan fasilitas pelatihan panahan dengan para pelatih yang berkompeten di bidangnya. dan kami menjual alat alat panahan serta repair alat panahan.</p>
          </div>
          <div class="boxes">
            <div class="boxs">
              <img src="assets/img/panahan.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" />
              <div class="desc" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                <h1>
                  Lapangan <br>
                  Pelatihan
                </h1>
                <p style="font-size: 18px;" >
                  Berikut lapangan pelatihan para atlet yang sedang latihan. tempatnya sangat luas dan nyaman. Banyak penghjaun dan membuat suasana menjadi asri dan teduh.</p>
                <div class="bahasa">
                  <!-- <button>React</button>
                  <button>Vue</button>
                  <button>Bootstrap</button>
                  <button>Tailwind CSS</button>
                  <button>Node Js</button>
                  <button>Express Js</button>
                  <button>MongoDB</button> -->
                </div>
              </div>
            </div>
            <div class="boxs">
              <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                <h1>
                  Coaching
                </h1>
                <p style="font-size: 18px;" >
                  Pelatih mengcoaching para atlet seperti pembenaran tehnik, kedisiplinan dalam latihan dan membentuk karakter mental para atlet agar menciptakan atlet yang berkompeten.
                </p>
                <div class="bahasa">
                  <!-- <button>Flutter</button>
                  <button>Node Js</button>
                  <button>Express Js</button>
                  <button>MongoDB</button> -->
                </div>
              </div>
              <img src="assets/img/panah.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" />
            </div>
            <div class="boxs">
              <img src="assets/img/panah3.jpg" alt="" data-aos="zoom-in" data-aos-duration="1000" />
              <div class="desc" data-aos="fade-up" data-aos-duration="1000">
                <h1>
                 Pembinaan <br>
                 Fisik
                </h1>
                <p style="font-size: 18px;" >
                  pelatih melakukan pembinaan fisik terhadap atlet untuk melatih ketahanan fisik para atlet dan membentuk karakter kedisiplinan atlet.</p>
                <div class="bahasa">
                  <!-- <button>Python</button>
                  <button>C</button>
                  <button>Java</button>
                  <button>Flutter</button>
                  <button>RabbitMQ</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg class="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#111111"
        fill-opacity="1"
        d="M0,128L40,144C80,160,160,192,240,186.7C320,181,400,139,480,149.3C560,160,640,224,720,224C800,224,880,160,960,149.3C1040,139,1120,181,1200,181.3C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <!-- todo Services -->

    <!-- todo Map -->
    <div class="contact" id="map">
      <div class="container">
        <div class="contact-box">
          <div class="map-box">
            <div class="box">
              <!-- <i class="fa-solid fa-star"></i> -->
              <i class="fa-solid fa-location-dot" style="color: red; font-size: 60px;"></i>
              <h1>Our Location</h1>
              <p style="font-size: 18px;" >Temukan kami disini!</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.888709102098!2d106.9043668!3d-6.278359699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2b6f793fbfd%3A0x50a79ac404b8a92c!2sPaskhas!5e0!3m2!1sid!2sid!4v1702440887957!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- todo Map -->

    <!-- todo Contact -->
    <div class="contact" id="feedback">
      <div class="container">
        <div class="contact-box">
          <div class="box">
            <!-- <i class="fa-solid fa-star"></i> -->
            <i class="fa-regular fa-comment" style="color: white; font-size: 60px;"></i>
            <h1>Feedback</h1>
            <p style="font-size: 18px;" >Silahkan beri masukkan anda tentang club kami dibawah ini!</p>
          </div>
          <div class="form-contact">
            <form action="index.php" method="post">
              <table>
                <tr>
                  <td>
                    <input type="text" name="Firstname" placeholder="First Name" required autocomplete="off" />
                  </td>
                  <td>
                    <input type="text" name="Lastname" placeholder="Last Name" autocomplete="off" />
                  </td>
                </tr>
                <tr>
                  <td colspan="2"><input type="email" name="Email" placeholder="Your Email" required autocomplete="off" style="width: 100%" /></td>
                </tr>
                <tr>
                  <td colspan="2">
                    <textarea name="Pesan" cols="30" rows="10" placeholder="Pesan..." required style="width: 100%"></textarea>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <button type="submit" name="Submit" onclick="return confirm('Apakah Anda ingin Mengirim Pesan?')">Kirim</button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- todo Contact -->
    
    <!-- todo Comment -->
    <div class="contact" id="list-feedback">
      <div class="container">
        <div class="contact-box">
          <div class="comment-box">

            <div class="box">
              <!-- <i class="fa-solid fa-star"></i> -->
              <i class="fa-regular fa-comment-dots" style="color: white; font-size: 70px;"></i>
              <h1>List Feedback</h1>
              <p style="font-size: 18px;" >Beberapa orang yang sudah memberi feedback!</p>
            </div>
          <div class="komen">
            <?php
              $sql = "SELECT * FROM contact";
              $query = mysqli_query($conn, $sql);
              
              while($row = mysqli_fetch_array($query)) : ?>
              <div class="container-text">
                <p>Name : <?= $row['firstname'] . " " . $row['lastname'] ?></p>
                <p>Email : <?= $row['email'] ?> </p>
                <p id="comment">Comment : <?= $row['message'] ?> </p>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- todo Comment -->

    <!-- todo Footer -->
    <div class="footer">
      <div class="container">
        <div class="footer-box">
          <div class="box">
            <div>
              <i class="fa-solid fa-droplet"></i>
              <h2>Memanah</h2>
            </div>
            <p>Marilah memanah, memanah adlah olahraga yang menyenangkan selain menyenangkan olahraga memanah juga merupakan sunnah rosul.</p>
          </div>
          <div class="box">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#map">Location</a>
            <a href="#feedback">feedback</a>
          </div>
          <div class="box">
            <a href="#">Terms Of Services</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Blog</a>
            <!-- <a href="#">Cookies Setting</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- todo Footer -->

    <!-- todo Copyright -->
    <div class="copyright">
      <div class="container">
        <div class="copy-box">
          <p>&copy; Copyright 2023 by Dirgantara Archery Club, All Right Reserved.Designed by TihhArd</p>
          <div class="social-footer">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
          </div>
        </div>
      </div>
    </div>
    <!-- todo Copyright -->

    <!-- todo Preloader -->
    <div class="loader">
      <img src="assets/loader/Pulse-1s-104px.gif" alt="loading.io" />
    </div>
    <!-- todo Preloader -->

    <!-- JS -->
    <script src="dist/js/script.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- todo sensor -->
    <script>
        var sensor = ["butut", "burik", "buruk", "jelek", "kontol", "memek", "anjing", "bangsat"];
        function replaceTextInElements(elements) {
            elements.forEach(function(element) {
                // Mengambil teks dari elemen
                var originalText = element.textContent;

                // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
                var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
                // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
                return '*'.repeat(match.length);
                });

                // Menetapkan teks yang telah diganti kembali ke elemen
                element.textContent = newText;
            });
        }

        // Mengambil semua elemen <p> dengan id="message"
        var messageElements = document.querySelectorAll('p#comment');

        // Mengganti kata-kata dalam elemen-elemen yang dipilih
        replaceTextInElements(messageElements);
    </script>
    <!-- todo sensor -->
  </body>
</html>
