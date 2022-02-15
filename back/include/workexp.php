<div class="content">
    <span style="font-size:26px;font-weight:700;">Workexp</span> <button class="btn btn-success" onclick="modal('add', 'workexp', 'null')">新增</button>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">company</th>
                <th scope="col">position</th>
                <th scope="col">time</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows = $Workexp->all(['resume_id' => $_SESSION['id']]);
            foreach ($rows as $row) { ?>
                <tr>
                    <td><?= $row['company']; ?></td>
                    <td><?= $row['position']; ?></td>
                    <td><?= $row['year']; ?>年<?= $row['month']; ?>月</td>
                    <td>
                        <button class="btn btn-info" onclick="modal('edit','workexp',<?= $row['id']; ?>)">edit</button>
                        <button class="btn btn-danger" onclick="del_chk('workexp',<?= $row['id']; ?>)">del</button>
                    </td>
                </tr>


            <?php } ?>
        </tbody>
    </table>




</div>