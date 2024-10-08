<header class="header">

<section class="flex">

   <a href="../admin/dashboard.php?key=<?=$model->id?>" class="logo">Dortmund Sports <span>Academy</span></a>

   <nav class="navbar">
      <a href="../admin/dashboard.php?key=<?=$model->id?>">home</a>
      <a href="../admin/edit.news.php">news</a>
      <a href="../admin/update.php">updates</a>
      <a href="../admin/gallery.php">gallery</a>
      <a href="../admin/programs.edit.php">programs</a>
      <a href="../admin/admin.accounts.php">admins</a>
   </nav>

   <div style="display: flex;" class="icons">
      <div id="menu-btn" class="bi-list"></div>
      <div id="user-btn" class="bi-person"></div>
   </div>


   
   <div class="profile">
         <div class="flex-btn">
            <a href="register.admin.php" class="option-btn">register</a>
            <a href="index.php" class="option-btn">login</a>
         </div>
         <a href="logout.php" class="delete-btn">logout</a> 
   </div>


   </section>

</header>


    <section class="dashboard">

        <h1 class="heading">dashboard</h1>
     
        <div class="box-container">
     
           <div class="box">
              <h3>welcome!</h3>
              <p><?=$model->name?></p>
              <a href="admin.profile.php?key=<?=$model->id?>" class="btn">update profile</a>
           </div>
     
           <div class="box">
            
              <h3> NEWS</h3>
              <p>see all posted news</p>
              <a href="edit.news.php" class="btn">edit news</a>
           </div>
     
           <div class="box">
        
              <h3>UPDATES</h3>
              <p>see all posted updates</p>
              <a href="update.php" class="btn">Edit Updates</a>
           </div>
     
           <div class="box">

              <h3>GALLERY</h3>
              <p>see all posted pictures</p>
              <a href="gallery.php" class="btn">Edit Gallery</a>
           </div>
     
           <div class="box">

              <h3>PROGRAMS</h3>
              <p>see all posted programs</p>
              <a href="programs.edit.php" class="btn">edit programs</a>
           </div>

           <div class="box">

              <h3>ADMIN USERS</h3>
              <p>see all admins</p>
              <a href="admin.accounts.php" class="btn">edit admins</a>
           </div>
        </div>
     
     </section>
     

