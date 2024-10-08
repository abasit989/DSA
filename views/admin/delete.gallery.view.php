<div class="news-container-delete">
                <div class="news-details">
                    <h2>Are You sure you want to delete this?</h2>
                    <img src="../uploaded_img/gallery/<?=$model->image?>" width="200"></img>
                </div>

                <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $model->id ?>" />

                <a href=""><button name="yes" class="button" style="background-color: var(--RED)">Yes</button>
                </a>
                <a href=""><button class="button" name="no" style="background-color: var(--YELLOW)" >No</button>
                </a>
                </form>

</div>