

<main>
        <section class="add-products">

            <h1 class="heading">EDIT UPDATES</h1>
        
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="original-title" value="<?= $model->id ?>" />
                <div class="flex">
                    <div class="inputBox">
                        <span>News Title</span>
                        <textarea type="text" class="box"  name="title"><?=$model->title?></textarea>
                    </div>
        
                    <div class="inputBox">
                        <span>News Description</span>
                        <textarea type="text" class="box box-desc"  name="description"><?=$model->description?></textarea>
                    </div>
        
                    <div class="inputBox">
                        <span>image 01</span>
                        <input type="file" required name="image" accept="image/jpg, image/jpeg, image/png, image/webp" class="box">
                    </div>
        
                <input style="background-color: var(--YELLOW);" name="yes" type="submit" value="edit update" class="btn">
                <input type="submit" value="Go Back" name="no" class="btn">
            </form>
    
        </section><br>
    </main>



