<style>
    .workexp {
        width: 100%;
        display: flex;
    }

    .workexp * {
        width: 25%;
    }

</style>
<div class="content">
    <span style="font-size:26px;font-weight:700;">workexp</span> <button onclick="modal('add', 'workexp', 'null')">新增</button>
    <div class="list workexp">
        <div class="company">
            company
        </div>
        <div class="position">
            position
        </div>
        <div class="">
            time
        </div>
        <div>
            edit
        </div>
    </div>
    <?php
    $rows = $Workexp->all(['resume_id'=>$_SESSION['id']]);
    foreach ($rows as $row) { ?>
        <div class="workexp">
            <div class="company">
                <?= $row['company']; ?>
            </div>
            <div class="position">
                <?= $row['position']; ?>
            </div>
            <div class="">
                <?= $row['year']; ?>年<?= $row['month']; ?>月
            </div>
            <div class ="edit">
                <button onclick="modal('edit','workexp',<?= $row['id'];?>)">edit</button>
                <button onclick="del_chk('workexps',<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>