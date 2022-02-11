function adjModal() {
    $("#modalBG").css("height", window.innerHeight);
    $("body").css("height", window.innerHeight);
}


function modal(e, sort, id) {

    $("#modal").load("./modal/" + sort + ".html", function () {

        if (sort == "add") {
            $("#act").text("新增");
            $("#act").attr("onclick", "cu('add','sort','null')")
        } else {
            $("#act").text("修改");
            $("#act").attr("onclick", "cu('edit','sort','" + id + "')")
        }
        if (e != "add") {
            rd(e, sort, id);
        }

        $("#modalBG").css({ "z-index": 999, 'opacity': 1 });
        $("#modal").css("transform", "rotateY(0deg)");
    });

}
window.onclick = function (event) {
    if (event.target.id == "modalBG") {
        clearModal();
    }
}
function clearModal() {
    $("#modalBG").css({ "z-index": -999, 'opacity': 0 });
    $("#modal").css("transform", "rotateY(90deg)");
}

function del_chk(e, sort, id) {
    let delCk = confirm("確定刪除!?");
    if (delCk) {
        rd(e, sort, id);
    }
};

function rd(e, sort, id) {
    $.post("api/rd.php", { e, sort, id }, (res) => {
        if (res == 'del') {
            location.reload();
        } else {
            let data = JSON.parse(res);
            
            $("#name").val(data.name);
            $("#img").val(data.img);
            
            if (sort == "skills") {
                $("#level").val(data.level);
            } else {
                $("#link").val(data.link);
            }
        }
        console.log(res);
    });
}