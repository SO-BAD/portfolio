<h3 style='text-align:center;'>Add Skill</h3>
<div class="form-group">
    <label for="name">skillName</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
</div>
<div class="form-group ">
    <label for="level">level</label> ---- <span id="num"></span>
    <input type="range" min="0" max="100" class="form-control" id="level" onchange="$('#num').text(this.value);">
</div>
<div class="form-group mt-3">
    <label for="img">Image input</label>
    <input type="file" class="form-control-file" id="img">
</div>

<button type="button" class="btn btn-primary" id="act">Submit</button>
<button type="button" class="btn btn-primary" onclick="clearModal()">取消</button>
