<style>
    .education {
        width: 100%;
        display: flex;
    }

    .education * {
        width: 25%;
    }

</style>
<div class="content">
    <span style="font-size:26px;font-weight:700;">Education</span> <button onclick="modal('add', 'educations', 'null')">新增</button>
    <div class="list education">
        <div class="school">
            school
        </div>
        <div class="project">
            project
        </div>
        <div>
            edit
        </div>
    </div>
    <?php
    $rows = $Education->all(['resume_id'=>$_SESSION['id']]);
    foreach ($rows as $row) { ?>
        <div class="education">
            <div class="school">
                <?= $row['school']; ?>
            </div>
            <div class="project">
                <?= $row['project']; ?>
            </div>
            <div class ="edit">
                <button onclick="modal('edit','educations',<?= $row['id'];?>)">edit</button>
                <button onclick="del_chk('educations',<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>
