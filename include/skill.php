<div id="skill">
        <?php
            $rows = $Skill->all(['resume_id'=>$user]);
            foreach($rows as $row){
        ?>
        <div class="skill">
            <div class="img">
                <img src="img/<?= $row['img']?>"  style="width:100%;"alt="">
            </div>
            <div class="skill_intro">
                <h2><?= $row['name']?></h2>
                <div class="full_level">
                    <div class="level" style="width:<?= $row['level']?>%;">

                    </div>
                </div>
            </div>
        </div>
        <?php  }?>
    </div>