
    <header>
        <div class="header-container">
        <a href="index.php" style="text-decoration: none"><h1 class="logo">Dortmund Sports Academy</h1></a>
            <div class="nav-menu" id="menuIcon"><i class="bi-list"></i></div>
            <nav class="nav" id="navMenu">
              <div><i class="bi-x" id="close"></i></div>
                <ul>
                    <li><a href="#">Home</a></li>
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

        <div class="vid-container">
            <video class="vid" src="assets/media/videos/video_2023-09-17_11-47-39.mp4" autoplay loop></video>
        </div>

        <a href="https://forms.gle/xE2SUztMy3K1jF6B7"><button class="reg-btn">Register For Tryout <i class="bi-chevron-right"></i></button></a>

            <div class="message">
                <h1>Make your dream of becoming a <span style="color: #fcb900">professional</span> football player come true!</h1>
            </div>
    </header>
    <main>
        <section class="updates-section">
            <div class="container">
                <div class="card updates-slider">
                  <div class="swiper-wrapper">
                  <?php foreach($model2 as $updates) :?>
                    <div class="swiper-slide">
                    
                      <h2><?=$updates->title?></h2>
                      <p><?=$updates->description?></p>
                      <span>Dortmund Sports Academy</span>
                      <div class="pic"> <img src="uploaded_img/<?=$updates->image?>" alt=""></div>
                    <button></button>
                    </div>
                    <?php endforeach; ?> 
                </div>
            </div>
        </section>
        
        <section class="latest-section">
            <h1>LATEST NEWS </h1> 
            <div class="underline"></div>
            
          <div class="testimonials-slider swiper">
          
            <div class="swiper-wrapper">
            <?php foreach($model as $news) :?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="latest-news-image">
                    <img src="uploaded_img/<?=$news->image?>" class="testimonial-img" alt="">
                  </div>
                  <a href="news.details.php?key=<?=$news->id?>" style="text-decoration: none;">
                  <p><?=$news->uploaded_on?></p>
                  <h4><?=$news->title?></h4>       
                <div class="hover-line"></div>
              </div>              
            </div><!-- End testimonial item -->
            </a>
            <?php endforeach; ?> 
          </div>    
          <div class="swiper-pagination"></div>
          
            
        </section>
       


        <section class="trial-section">
          <div>
            <h1>Do you want a Trial at Dortmund Sports Academy?</h1>
            <a href="https://forms.gle/xE2SUztMy3K1jF6B7" target="_blank"><button>TRIAL FORM</button></a>
            <p>complete the form and you will be contacted with the next steps.</p>
            <p class="gallery-link"><a href="gallery.php">View Gallery <i class="bi-chevron-right"></i> </a></p>
          </div>
          <figure>
            <img src="assets/media/logo.jpg" alt="">
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

