<style>
    .skill {
        width: 100%;
        display: flex;
    }

    .skill * {
        width: 25%;
    }

    .edit{
        /* display: flex; */
    }
</style>
<div class="content">
    <span style="font-size:26px;font-weight:700;">Skill</span> <button onclick="modal('add', 'skills', 'null')">新增</button>
    <div class="list skill">
        <div class="name">
            name
        </div>
        <div class="level">
            level
        </div>
        <div class="img">
            img
        </div>
        <div>
            edit
        </div>
    </div>
    <?php
    $rows = $Skill->all(['resume_id'=>$_SESSION['id']]);
    foreach ($rows as $row) { ?>
        <div class="skill">
            <div class="name">
                <?= $row['name']; ?>
            </div>
            <div class="level">
                <?= $row['level']; ?>
            </div>
            <div class="img">
                <?= $row['img']; ?>
            </div>
            <div class ="edit">
                <button onclick="modal('edit','skills',<?= $row['id'];?>)">edit</button>
                <button onclick="del_chk('skills',<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>
