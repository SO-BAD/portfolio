<style>
    .skills {
        width: 600px;
        margin: auto;
    }

    .skill {
        width: 100%;
        display: flex;
    }

    .skill:nth-child(1) {
        border-bottom: 2px solid #c0c0c0;
    }

    .skill * {
        width: 150px;
    }

    .edit{
        display: flex;
    }
</style>
<span style="font-size:26px;font-weight:700;">Skill</span> <button onclick="modal('add', 'skills', 'null')">新增</button>
<div class="skills">
    <div class="skill">
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
<script>

</script>
