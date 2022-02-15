<?php
$user = $Resume->find(['id' => $_SESSION['id']]);
$sh_arr = explode(",",$user['sh']);
?>
<div class="content">

    <span style="font-size:26px;font-weight:700;">Resume</span> <button class="btn btn-success" onclick="modal('null','headshot','null')">大頭照</button>
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control resumeData" id="name" placeholder="Please input name" value="<?= $user['name'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control resumeData" id="exampleFormControlInput1" placeholder="name@example.com" value="<?= $user['email'] ?>">
    </div>
    <div class="form-group">
        <label for="intro">Intro</label>
        <textarea class="form-control resumeData" id="intro" rows="3"><?= $user['intro'] ;?></textarea>
    </div>
    <div class="form-group">
        <label for="autobiography">Autobiography</label>
        <textarea class="form-control resumeData" id="autobiography" rows="3"><?= $user['autobiography'] ;?></textarea>
    </div>
    <div class="form-group">
        <label for="">Layout</label><br>
        <input type="checkbox" value="0" <?php echo (in_array(0,$sh_arr))?"checked":"" ;?>>intro<br>
        <input type="checkbox" value="1" <?php echo (in_array(1,$sh_arr))?"checked":"" ;?>>skill<br>
        <input type="checkbox" value="2" <?php echo (in_array(2,$sh_arr))?"checked":"" ;?>>collection<br>
    </div>
    <button class="btn btn-info" onclick="crud('u','resume','<?= $_SESSION['id'] ?>')"> 修改</button>

</div>
