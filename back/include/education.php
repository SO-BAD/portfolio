<div class="content">
    <span style="font-size:26px;font-weight:700;">Education</span> <button class="btn btn-success" onclick="modal('add', 'educations', 'null')">新增</button>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">school</th>
                <th scope="col">project</th>
                <th scope="col"> edit</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $rows = $Education->all(['resume_id' => $_SESSION['id']]);
            foreach ($rows as $row) { ?>

                <tr>
                    <td><?= $row['school']; ?></td>
                    <td><?= $row['project']; ?></td>
                    <td>
                        <button class="btn btn-info" onclick="modal('edit','educations',<?= $row['id']; ?>)">edit</button>
                        <button class="btn btn-danger" onclick="del_chk('educations',<?= $row['id']; ?>)">del</button>
                    </td>
                </tr>

            <?php } ?>


        </tbody>
    </table>

</div>