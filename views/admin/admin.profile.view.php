
<section class="form-container">
    <form action="" method="post">
       <h3>update profile</h3>
       <p><?=$status?></p>
       <p><?=$status2?></p>
       <input type="hidden" name="prev_pass" value="<?=$model->id?>">
       <input type="text" name="name" value="<?=$model->name?>" required placeholder="enter your username" maxlength="20"  class="box">
       <input type="password" name="old_pass" placeholder="enter old password" maxlength="20"  class="box">
       <input type="password" name="new_pass" placeholder="enter new password" maxlength="20"  class="box">
       <input type="password" name="confirm_pass" placeholder="confirm new password" maxlength="20"  class="box">
       <input type="submit" value="update now" class="btn" name="submit">
    </form>
 </section>


 