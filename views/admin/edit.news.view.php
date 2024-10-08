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
        <section class="add-products">

            <h1 class="heading">POST NEWS</h1>
        
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="flex">
                    <div class="inputBox">
                        <span>News Title</span>
                        <textarea type="text" required class="box" required name="title"></textarea>
                    </div>
        
                    <div class="inputBox">
                        <span>News Description</span>
                        <textarea type="text" required class="box box-desc" required name="description"></textarea>
                    </div>
        
                    <div class="inputBox">
                        <span>image</span>
                        <input type="file" required name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
                    </div>

                    <div class="inputBox">
                        <input type="hidden" required name="date" class="box">
                    </div>
        
                <input type="submit" value="post news" class="btn">
            </form>
    
        </section><br>
        <section class="show-products">
    
            <h1 class="heading">posted news</h1>
        </section>
        <?php foreach($model as $info) : ?>

            <div class="news-container">
                <figure>
                    <img src="../uploaded_img/<?=$info->image ?>" alt="">
                </figure>
                <div class="news-details">
                    <span><i class="bi-clock"></i><?="$info->uploaded_on"?></span>
                    <h2><?=$info->title?></h2>
                    <p><?=$info->description?></p>
                    <div>
                        <a href="change.news.php?key=<?=$info->id?>"><button class="button">edit</button>
                        </a>
                        <a href="delete.php?key=<?=$info->id?>"><button class="button" style="background-color: var(--RED)" >Delete</button>
                        </a>
                    </div>
                </div>
            </div>
  
        <?php endforeach; ?>
        </section> 
    </main>



