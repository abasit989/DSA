
    
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
            <h1>GALLERY</h1>
        </div>
    </header>

    <main>
        <section class="gallery-section">
            <div class="gallery-container">
                <?php foreach($model as $gallery) : ?>
                <div class="image-container">
                    <figure>
                    <a href="uploaded_img/gallery/<?=$gallery->image;?>" title="fullscreen" class="glightbox preview-link"><img src="uploaded_img/gallery/<?=$gallery->image;?>" alt=""></a>
                </figure>
                </div>
                <?php endforeach ?>
            </div> 
        </section>

        
        <section class="adverts-section adverts-section-news">
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