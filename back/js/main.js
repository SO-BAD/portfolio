function adjModal() {
    $("#modalBG").css("height", window.innerHeight);
    // $("body").css("height", window.innerHeight);
}

function logout() {
    $.post("./api/session.php", {
        logout: 'logout'
    }, () => {
        location.reload();
    }
    );
}


function modal(e, sort, id) {

    $("#modal").load("./modal/" + sort + ".php", function () {



        if (e == "add") {
            $("#act").text("新增");
            $("#act").attr("onclick", "crud('c','" + sort + "','null')")
        } else if( e== "edit"){
            $("#act").text("修改");
            $("#act").attr("onclick", "crud('u','" + sort + "','" + id + "')")
            crud('r', sort, id);
        }

        // edit 用ajax 取得 資料


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

function del_chk(sort, id) {
    let delCk = confirm("確定刪除!?");
    if (delCk) {
        crud('d', sort, id);
    }
};
function crud(e, sort, id) {

    let data = new Array();

    if (e == 'c' || e == 'u') {
        if (sort == "resume") {
            let resume = document.querySelectorAll(".resumeData");
            for (let i = 0; i < resume.length; i++) {
                data.push(resume[i].value);
            }
        } else {
            let input = document.querySelector("#modal").querySelectorAll("input");
            let chk_box = new Array();
            for (let i = 0; i < input.length; i++) {
                switch (input[i].type) {
                    case 'checkbox':
                        if (input[i].checked) {
                            chk_box.push(input[i].value);
                        }
                        break;
                    case 'file':
                        break;
                    default:
                        data.push(input[i].value);
                        break;
                }
            }
            if (document.querySelector("#modal").querySelectorAll("input[type='checkbox']").length)
                data.push(chk_box.toString());
        }
    }
    if (document.querySelector("#modal").querySelectorAll("input[type='file']").length && (e == "c" ||e == "u")) {
        let image =  document.querySelector("#img").files[0];
        data.push(image.name);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText)
            }
        }
        xhr.open('POST', './api/crud.php', true);
        var formdata = new FormData();
        formdata.append('img', image);
        formdata.append('sort', sort);
        xhr.send(formdata);
    }

    let db = new DB(sort);

    $.post("api/crud.php", { e, sort, id, col: db.col, data }, (res) => {
        // console.log(res);
        if (e == "r") {
            db.showVal(res);
        } else {
            location.reload();
        }
    });



}