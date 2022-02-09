<div id="collections">
    <?php
    $rows = $Collection->all();
    foreach ($rows as $row) {
    ?>
        <div class="work_item">
            <div class="img_box">
                <img src="img/<?= $row['img']; ?>" target="_blank" alt="" style="width:100%; height:100%">
            </div>
            <div class="work_intro">
                <a href="<?= $row['link']; ?>"><?= $row['name']; ?></a>
            </div>
        </div>
    <?php  } ?>

</div>