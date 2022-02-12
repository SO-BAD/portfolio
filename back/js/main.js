function adjModal() {
    $("#modalBG").css("height", window.innerHeight);
    $("body").css("height", window.innerHeight);
}

function logout(){
    $.post("./api/session.php", {
        logout:'logout'
    },()=>{
        location.reload();
    }
);
}


function modal(e, sort, id) {

    $("#modal").load("./modal/" + sort + ".html", function () {

       

        if (e == "add") {
            $("#act").text("新增");
            $("#act").attr("onclick", "crud('c','"+sort+"','null')")
        } else {
            $("#act").text("修改");
            $("#act").attr("onclick", "crud('u','"+sort+"','" + id + "')")
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
    let data =new Array();
    if(e == 'c' || e == 'u'){
        let input = document.querySelectorAll("input");
        for (let i =0;i<input.length; i++){
            data.push(input[i].value);
        }
    }


    let col = new Array();
    switch (sort){
        case 'skills':
            col = ['name','level','img'];
            break;
        case 'collections':
            col = ['name','img','link'];
            break;
    }
    
    
    
    
    $.post("api/crud.php", { e, sort, id, col, data}, (res) => {
        
        if(e =="r"){
            console.log(res);
            res = JSON.parse(res);
            $("#name").val(res.name);
            $("#img").val(res.img);
            
            if (sort == "skills") {
                $("#level").val(res.level);
            } else {
                $("#link").val(res.link);
            }
        }else{
            location.reload();
        }
    });
}