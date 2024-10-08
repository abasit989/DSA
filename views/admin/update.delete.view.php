<div class="news-container-delete">
                <div class="news-details">
                    <h2>Are You sure you want to delete this?</h2>
                    <p><?=$model->title?></p>
                </div>

                <form action="" method="POST">
                <input type="hidden" name="title" value="<?= $model->id ?>" />

                <a href=""><button name="yes" class="button" style="background-color: var(--RED)">Yes</button>
                </a>
                <a href=""><button class="button" name="no" style="background-color: var(--YELLOW)" >No</button>
                </a>
                </form>

</div>