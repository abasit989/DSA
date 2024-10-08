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

      </section>

   </header>

   <main>
      <section class="accounts">

         <h1 class="heading">admin accounts</h1>

         <div class="box-container">

         <div class="box">
            <p>add new admin</p>
            <a href="register.admin.php" class="option-btn">register admin</a>
         </div>

         <?php

            if($model->rowCount() > 0){
               while($fetch_accounts = $model->fetch(PDO::FETCH_ASSOC)){   
         ?>
         <div class="box">
            <p> admin name : <span><?= $fetch_accounts['name']; ?></span> </p>
            <div class="flex-btn">
               <a href="delete.admin.php?key=<?= $fetch_accounts['id']; ?>" class="delete-btn">delete</a>
               <?php if($fetch_accounts['id'] == $model2) : ?>
                  <a href="admin.profile.php?key=<?=$fetch_accounts['id']?>" class="option-btn">update</a>;
               <?php endif?>
            </div>
         </div>
         <?php
               }
            }else{
               echo '<p class="empty">no accounts available!</p>';
            }
         ?>

         </div>

      </section>

   </main>


 