<div class="content">
    <span style="font-size:26px;font-weight:700;">Skill</span> <button class="btn btn-success" onclick="modal('add', 'skills', 'null')">新增</button>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">name</th>
                <th scope="col">level</th>
                <th scope="col">img</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows = $Skill->all(['resume_id' => $_SESSION['id']]);
            foreach ($rows as $row) { ?>
                <tr>
                    <td> <?= $row['name']; ?></td>
                    <td> 
                        <?= $row['level']; ?>/100
                    </td>
                    <td> 
                        <img src="../img/skills/<?= $row['img']; ?>" style="width:50px;"alt="">
                    </td>
                    <td>
                        <button class="btn btn-info" onclick="modal('edit','skills',<?= $row['id']; ?>)">edit</button>
                        <button class="btn btn-danger" onclick="del_chk('skills',<?= $row['id']; ?>)">del</button>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>



</div>