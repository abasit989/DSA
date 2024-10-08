   <header class="header">

   <section class="flex">

   <a href="../admin/dashboard.php?key=<?=$model2?>" class="logo">Dortmund Sports <span>Academy</span></a>

   <nav class="navbar">
      <a href="../admin/dashboard.php?key=<?=$model2?>">home</a>
      <a href="../admin/edit.news.php">news</a>
      <a href="../admin/update.php">updates</a>
      <a href="../admin/gallery.php">gallery</a>
      <a href="../admin/programs.edit.php">programs</a>
      <a href="../admin/admin.accounts.php">admins</a>
   </nav>

   <div class="icons">
         <div id="menu-btn" class="bi-list"></div>
   </div>

   <div class="profile">
            <a href="../admin/admin.profile.php" class="btn">update profile</a>
            <div class="flex-btn">
               <a href="../admin/register.admin.php" class="option-btn">register</a>
               <a href="../admin/index.php" class="option-btn">login</a>
            </div>
            <a href="../admin_logout.php" class="delete-btn">logout</a> 
   </div>



   </header>

   <main>
   <section class="add-products">

   <h1 class="heading">ADD TO GALLERY</h1>

   <form action="" method="POST" enctype="multipart/form-data">
         <div class="inputBox">
               <span>image</span>
               <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
         </div>

      <input type="submit" value="add to gallery" class="btn">
   </form>
   </section><br>


   <section class="gallery-section">
      <h1 class="heading">GALLERY</h1>
      <div class="gallery-container">
      <?php foreach($model as $gallery) : ?>

         <div class="image-container">
            <figure>
            <a href="../uploaded_img/gallery/<?=$gallery->image;?>" title="fullscreen" class="glightbox preview-link"><img src="../uploaded_img/gallery/<?=$gallery->image;?>" alt=""></a>
            </figure>
            <a href="delete.gallery.php?key=<?=$gallery->id?>"><button class="button">Delete</button></a>
         </div>
         <?php endforeach ?>
      </div> 

   </section>

   </main>



