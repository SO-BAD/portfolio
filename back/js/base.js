class DB{
    constructor(sort){
        this.sort = sort;
        switch (sort){
            case 'skills':
                this.col = ['name','level','img'];
                break;
            case 'collections':
                this.col = ['name','link','img','skills'];
                break;
            case 'workexp':
                this.col = ['company','position','year','month'];
                break;
            case 'educations':
                this.col = ['school','project'];
                break;
            case 'resume':
                this.col = ['name','email','intro','autobiography'];
                break;
        }
    }

    showVal(data){
        data = JSON.parse(data);
        switch (this.sort){
            case 'skills':
                $("#name").val(data.name);
                $("#img").val(data.img);
                $("#level").val(data.level);
                break;
            case 'collections':
                $("#name").val(data.name);
                $("#img").val(data.img);
                $("#link").val(data.link);
                let skills = data.skills.split(",");
                let chk_box = document.querySelector("#modal").querySelectorAll("input[type='checkbox']");
                for(let i=0;i<chk_box.length;i++){
                    if(skills.includes(chk_box[i].value)){
                        chk_box[i].checked = true;
                    }
                }

                break;
            case 'workexp':
                $("#company").val(data.company);
                $("#position").val(data.position);
                $("#year").val(data.year);
                $("#month").val(data.month);
                break;
            case 'educations':
                $("#school").val(data.school);
                $("#project").val(data.project);
                break;
        }
    }
    post(){

    }
}