<?php
$user = $Resume->find(['id' => $_SESSION['id']]);

?>
<div class ="content">
<span style="font-size:26px;font-weight:700;">Resume</span> 
    <div>
        姓名 : <input class="resumeData"  type="text" value="<?= $user['name'] ?>">
    </div>
    <div>
        email : <input class="resumeData" type="text" value="<?= $user['email'] ?>">
    </div>

    <h4>intro</h4>
    <textarea name="" id="" class="resumeData" cols="30" rows="10"><?= $user['intro'] ?></textarea>
    
    <h4>autobiography</h4>
    <textarea name="" id="" class="resumeData" cols="30" rows="10"><?= $user['autobiography'] ?></textarea>
    <button onclick="crud('u','resume','<?= $_SESSION['id']?>')"> 修改</button>
</div>