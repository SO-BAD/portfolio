<h3 style='text-align:center;'>Add Collection</h3>


<div class="form-group">
    <label for="name">collectionName</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
</div>
<div class="form-group ">
    <label for="link">Link</label>
    <input type="text" class="form-control" id="link">
</div>
<div class="form-group">
    <label for="val">Skills</label><br>
    <?php
    include_once "../../share/base.php";

    $rows = $Skill->all(['resume_id' => $_SESSION['id']]);


    foreach ($rows as $row) {
        echo "<input  type= 'checkbox' value ='" . $row['id'] . "'>" . $row['name'] . "<br>";
    }
    ?>
</div>
<div class="form-group mt-3">
    <label for="img">Image input</label>
    <input type="file" class="form-control-file" id="img">
</div>

<button type="button" class="btn btn-primary" id="act">Submit</button>
<button type="button" class="btn btn-primary" onclick="clearModal()">取消</button>

