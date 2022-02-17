<style>
    .box_out {
        width: 500px;
        margin: auto;
    }

    .box {
        width: 500px;

        position: relative;
        background-image: url("../img/headshot/<?= $_POST['img']; ?>");
        background-color: rgba(0, 0, 0, 0.7);
        background-size: cover;

        background-blend-mode: multiply;
    }

    #src_img {
        /* clip-path: polygon(0px 0px, 100px 0px, 100px 100px, 0px 100px); */
    }

    #select {
        width: 100px;
        height: 100px;
        /* border: 10px solid black;
        background-color: white; */
        position: absolute;
        top:0px;
        left:0px;
    }
</style>
<div class="box_out">
    <input type="hidden" value="<?= $_POST['img']; ?>" id = "src">
    <div class="box" >

        <img src="../img/headshot/<?= $_POST['img']; ?>" alt="" id="src_img" style='width:100%'>
        <div id="select">

        </div>
    </div>
    <button onclick="save();" id= "save_btn" class="btn btn-info ">確認</button>
</div>

<script>
    function clip_move(left, top, width, height) {
        let tmp = new Array();
        left = left - $("#src_img").offset().left;
        tmp.push((left + "px " + top + "px"));
        tmp.push(((left + width) + "px " + top + "px"));
        tmp.push(((left + width) + "px " + (top + height) + "px"));
        tmp.push((left + "px " + (top + height) + "px"));
        $("#src_img").css("clip-path", "polygon(" + tmp.join() + ")")
    }
    class BOX {
        constructor(selector, maxLeft, maxTop) {
            this.selector = $(selector);
            // int
            this.top = this.selector.offset().top;
            this.left = this.selector.offset().left;
            this.width = this.selector.outerWidth();
            this.height = this.selector.outerHeight();
            this.maxLeft = maxLeft - this.width;
            // this.maxTop = maxTop - this.height;
            this.marginLeft = $("#src_img").offset().left;
        };

        save_downPoint(e) {
            //int 
            this.downPointX = e.clientX - this.left;
            this.downPointY = e.clientY - this.top;
        }
        move_box(e) {
            this.maxTop = $("#save_btn").offset().top -this.height;
            let x = (e.clientX - this.downPointX);

            let y = (e.clientY - this.downPointY);
            if (x >= this.marginLeft && x <= (this.maxLeft+this.marginLeft)) {
                this.selector.offset({
                    left: x.toString()
                });
                this.left = this.selector.offset().left;
            }
            if (y >= 0 && y <= this.maxTop) {
                this.selector.offset({
                    top: y.toString()
                });
                this.top = this.selector.offset().top;
            }
            clip_move(this.left, this.top, this.width, this.height)
        }
    }
    var box;
    var drag_stat = 0;


    $(document).ready(() => {
        clip_move($("#src_img").offset().left, 0, 100, 100);
        let h = $("#save_btn").offset().top;
        
        box = new BOX("#select", 500, parseInt(h));

        $("#select").on("mousedown", function(e) {
                if (drag_stat == 0) {
                    box.save_downPoint(e);
                    drag_stat = 1;
                }
            })
            $("#select").on("mousemove", function(e) {
                if (drag_stat == 1) {
                    box.move_box(e);
                }
            })
            $("#select").on("mouseup", function(e) {
                drag_stat = 0;
            })
            $("#select").on("mouseout", function(e) {
                drag_stat = 0;
            })

    })


    function save(){
        let img = $("#src").val();
        let x = box.left - $("#src_img").offset().left;
        let y = box.top;
        $.post("api/img.php",{img,x,y,h:$("#src_img").innerHeight()},(res)=>{
            console.log(res);
            location.reload();
        })
    }
</script>