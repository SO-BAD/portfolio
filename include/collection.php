<div style="width: 75%; margin:20px auto;">
    作品所使用技能
    <select name="" id="skill_opt" onchange="skill()">
        <option value="0">顯示全部</option>
        <?php
        $skills = $Skill->all(['resume_id' => $user]);

        foreach ($skills as $skill) {
            echo "<option value = '{$skill['id']}'>{$skill['name']}</option>";
        }
        ?>
    </select>

</div>

<script>
    function skill() {
        let skill_id = $("#skill_opt").val();
        if (skill_id == "0") {
            $(".collection").show();
        } else {
            let collections = document.querySelectorAll(".collection");
            for (let i = 0; i < collections.length; i++) {
                if (collections[i].dataset.skills.split(",").includes(skill_id)) {
                    collections[i].style.display = "block";
                } else {
                    collections[i].style.display = "none";
                }
            }
        }

    }
</script>
<div class="container">
    <div class="row">


    <?php
        $rows = $Collection->all(['resume_id' => $user]);
        foreach ($rows as $row) { ?>
            <div class="col-12 col-lg-6 col-xl-4 collection"  data-skills="<?= $row['skills']; ?>" >
                <div class="card mx-auto" style="width: 18rem; position:relative;">
                    <img src="img/collections/<?= $row['img']; ?>" class="card-img-top" alt="..." style=''>
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name']; ?></h5>
                        <a href="<?= $row['link']; ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php  } ?>
    </div>
</div>




