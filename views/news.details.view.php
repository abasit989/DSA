  
    <header>
      <div class="header-container">
      <a href="index.php" style="text-decoration: none"><h1 class="logo">Dortmund Sports Academy</h1></a>
        <div class="nav-menu" id="menuIcon"><i class="bi-list"></i></div>
        <nav class="nav" id="navMenu">
          <div><i class="bi-x" id="close"></i></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="program.php">Programs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="https://forms.gle/S3AR8LJHAsBXkyuh9" target="_blank">Sponsor Us</a></li>
            </ul>
            <div></div>
            <a href="https://forms.gle/S3AR8LJHAsBXkyuh9" target="_blank" style="text-decoration: none;"><button>Become a Sponsor</button></a>
        </nav>
      </div>        
      <div class="header-blank">
            <h2>News Title: <?=$model->title?></h2>
        </div>
    </header>
    <main>
      <section class="news-details-section">
        <figure>
          <img src="uploaded_img/<?=$model->image?>"alt="" width="400px">
        </figure>
        <div class="news-details">
          <h1><?=$model->title?></h1>
          <p><?=$model->description?></p>
        </div>
      </section>
      
        <section class="trial-section">
            <div>
              <h1>Do you want a Trial at Dortmund Sports Academy?</h1>
              <a href="https://forms.gle/xE2SUztMy3K1jF6B7" target="_blank"><button>TRIAL FORM</button></a>
              <p>complete the form and you will be contacted with the next steps.</p>
              <p class="gallery-link"><a href="gallery.php">View Gallery <i class="bi-chevron-right"></i> </a></p>
            </div>
            <figure>
              <img src="assets/media/photo_2023-09-18_21-05-46.jpg" alt="">
            </figure>
          </section>
  
          <section class="adverts-section">
            <div>
              <h2>LOCATION</h2>
              <p>Dortmund Sports Academy, Ghana - Accra, Berekuso, Akporman </p>
            </div>
            <div>
              <h2>CONTACT</h2>
              <p><i class="bi-envelope"> </i>dortmundsportsacademy@gmail.com</p>
              <p><i class="bi-phone"> </i> +233 24 347 3775</p>
            </div>
          </section>
  
    </main>
    <footer>
      <div class="footer">
        <p>Dortmund Sports Academy &copy; | <span><a href="" style="color: #fcb900; text-decoration: none;">Privacy Policy</a> | <span><a href="" style="color: #fcb900; text-decoration: none;">DSA Forms &amp; Terms and Condtions</a></span></p>
        
        <div class="icons">
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-tiktok"></i></a>
          <a href=""><i class="bi bi-youtube"></i></a>
        </div>
      </div>

    </footer>
