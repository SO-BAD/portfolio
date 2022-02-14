<div class="box">
    <div class="input_img">
        請將圖片拖曳到此增加
    </div>
    <div class ="edit_box">
        
    </div>
    <button onclick="clearModal()">取消</button>
</div>


<style>
    .box {
        margin: auto;
        min-width: 300px;
        min-height: 300px;
        max-height: 500px;
        overflow: auto;
    }

    .input_img {
        background-color: #888;
        margin: auto;
        width: 300px;
        height: 300px;
    }
</style>
<script>
    var box = document.querySelector('.box');
    box.ondragover = function(e) {
        e.preventDefault();
    }
    box.ondrop = function(e) {
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText)
            }
        }
        xhr.open('POST', './api/crud.php', true);
        var formdata = new FormData();
        formdata.append('img', e.dataTransfer.files[0]);
        formdata.append('sort', 'headshot');
        formdata.append('event', 'u');
        xhr.send(formdata);
        $(".input_img").hide();
        document.querySelector(".edit_box").innerHTML="<img style ='width:100%;'src='../img/headshot/"+e.dataTransfer.files[0].name+"'>";
    }
</script>