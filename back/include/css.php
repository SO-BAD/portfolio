<div class="content">
    <span style="font-size:26px;font-weight:700;">CSS</span> <button class="btn btn-success" onclick="modal('add', 'css', 'null')">新增</button>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">name</th>
                <th scope="col">attr</th>
                <th scope="col">val</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows = $Css->all(['resume_id' => $_SESSION['id']]);
            foreach ($rows as $row) { ?>
                <tr>
                    <td><?= $row['name']; ?></td>
                    <td> <?= $row['attr']; ?></td>
                    <td> <?= $row['val']; ?></td>
                    <td>
                    <button class="btn btn-info" onclick="modal('edit','css',<?= $row['id']; ?>)">edit</button>
                    <button class="btn btn-danger" onclick="del_chk('css',<?= $row['id']; ?>)">del</button>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</div>