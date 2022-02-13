<style>
    .collection {
        width: 100%;
        display: flex;
    }

    .collection *{
        width: 25%;
    }
    
</style>
<div class="content">
    <span style="font-size:26px;font-weight:700;">Collection</span> <button onclick="modal('add', 'collections', 'null')">新增</button>
    <div class="list collection">
        <div class="c_name">
            img
        </div>
        
        <div class="c_img">
            name
        </div>
        <div class="c_link">
            link
        </div>
        <div class="c_edit">
            edit
        </div>
    </div>
    <?php
    $rows = $Collection->all(['resume_id'=>$_SESSION['id']]);
    foreach ($rows as $row) { ?>
        <div class="collection">
            <div class="c_img"> 
                <img src="../img/<?= $row['img']; ?>" alt="" style="width:100%;">
                
            </div>
            <div class="c_name">
                <?= $row['name']; ?>
            </div>
           
            <div class="c_link">
                <?= $row['link']; ?>
            </div>
            <div class ="c_edit">
                <button onclick="modal('edit','collections',<?= $row['id'];?>)">edit</button>
                <button onclick="del_chk('collections',<?= $row['id'];?>)">del</button>
            </div>
        </div>
    <?php } ?>




</div>
<script>

</script>
