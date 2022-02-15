<div class="content">
    <span style="font-size:26px;font-weight:700;">Collection</span> <button class="btn btn-success" onclick="modal('add', 'collections', 'null')">新增</button>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">img</th>
                <th scope="col">name</th>
                <th scope="col">link</th>
                <th scope="col">edit</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $rows = $Collection->all(['resume_id' => $_SESSION['id']]);
            foreach ($rows as $row) { ?>

                <tr>
                    <td><img src="../img/collections/<?= $row['img']; ?>" alt="" style="width:50px;"></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['link']; ?></td>
                    <td>
                        <button class="btn btn-info" onclick="modal('edit','collections',<?= $row['id']; ?>)">edit</button>
                        <button class="btn btn-danger" onclick="del_chk('collections',<?= $row['id']; ?>)">del</button>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>

</div>