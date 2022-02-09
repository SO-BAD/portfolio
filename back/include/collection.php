<style>
    .collections {
        width: 600px;
        margin: auto;
    }

    .collection {
        width: 100%;
        display: flex;
    }

    .collection:nth-child(1) {
        border-bottom: 2px solid #c0c0c0;
    }

    .c_name,.c_img,.c_edit {
        width: 120px;
    }
    .c_link{
        width: 240px;
    }

    .c_edit{
    }
</style>

<div class="collections">
    <div class="collection">
        <div class="c_name">
            name
        </div>
        
        <div class="c_img">
            img
        </div>
        <div class="c_link">
            link
        </div>
        <div class="c_edit">
            edit
        </div>
    </div>
    <?php
    $rows = $Collection->all();
    foreach ($rows as $row) { ?>
        <div class="collection">
            <div class="c_name">
                <?= $row['name']; ?>
            </div>
            <div class="c_img">
                <?= $row['img']; ?>
            </div>
            <div class="c_link">
                <?= $row['link']; ?>
            </div>
            <div class ="c_edit">
                <button onclick="collection_edit(<?= $row['id'];?>)">edit</button>
                <button onclick="collection_del(<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>
<script>

</script>
