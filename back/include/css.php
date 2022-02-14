<style>
    .css {
        width: 100%;
        display: flex;
    }

    .css * {
        width: 25%;
    }

</style>
<div class="content">
    <span style="font-size:26px;font-weight:700;">css</span> <button onclick="modal('add', 'css', 'null')">新增</button>
    <div class="list css">
        <div class="name">
            name
        </div>
        <div class="attr">
            attr
        </div>
        <div class="val">
            val
        </div>
        <div>
            edit
        </div>
    </div>
    <?php
    $rows = $Css->all(['resume_id'=>$_SESSION['id']]);
    foreach ($rows as $row) { ?>
        <div class="css">
            <div class="name">
                <?= $row['name']; ?>
            </div>
            <div class="attr">
                <?= $row['attr']; ?>
            </div>
            <div class="val">
                <?= $row['val']; ?>
            </div>
            <div class ="edit">
                <button onclick="modal('edit','css',<?= $row['id'];?>)">edit</button>
                <button onclick="del_chk('css',<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>