<div>
    name : <input type="text"  id ="name">
</div>
<div>
    link : <input type="text" min="0" max="100" id ="link">
</div>
<div>
    img : <input type="text"  id ="img">
</div>
<div>
    skills
</div>
<?php 
    include_once "../../share/base.php";
    
    $rows = $Skill->all(['resume_id' =>$_SESSION['id']]);


    foreach($rows as $row){
        echo "<input  type= 'checkbox' value ='".$row['id']."'>".$row['name']."<br>";
    }
?>
<button id = "act"></button>
<button onclick="clearModal()">取消</button>