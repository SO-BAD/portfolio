<div id="out_box">
    <div class="box">
        <div class="input_img">
            請將圖片拖曳到此增加
        </div>
    </div>
    <button class="btn btn-info" onclick="clearModal()">取消</button>
</div>


<style>
    .box {
        margin: auto;
        min-width: 300px;
        min-height: 300px;
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
        clearModal();
        // alert("上傳成功");
        // console.log(e.dataTransfer.files[0]);
        // location.reload();
        $(".section").load("./modal/edit.php",{img:e.dataTransfer.files[0].name},()=>{})
    }
</script>