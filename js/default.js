document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        document.getElementById('contents').style.visibility = "hidden";
    } else if (state == 'complete') {
        setTimeout(function () {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
            document.getElementById('contents').style.visibility = "visible";
        }, 500);
    }
};

function getSubmenu(val) {
    $.ajax({
        type: "POST",
        url: "wizard/getSubmenu.php",
        data: 'id=' + val,
        success: function (data) {
            $("#submenu").html(data);
        }
    });
}

function getSubtask(val) {
    $.ajax({
        type: "POST",
        url: "wizard/getSubtask.php",
        data: 'id=' + val,
        success: function (data) {
            $("#subtask").html(data);
        }
    });
}

function getInflatable(val) {
    $.ajax({
        type: "POST",
        url: "wizard/getInflatable.php",
        data: 'id=' + val,
        success: function (data) {
            $("#inflatables").html(data);
        }
    });
}
$(document).ready(function(){
    $("#member").click(function(){
        $("#member_form").show();
        $("#customer_form").hide();
    });
    $("#customer").click(function(){
        $("#member_form").hide();
        $("#customer_form").show();
    });
    $("#driver").click(function(){
        $("#driver_select").toggle();
    });
});