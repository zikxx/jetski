document.onreadystatechange = function () {
    var state = document.readyState;
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
        url: "functions/getSubmenu.php",
        data: 'id=' + val,
        success: function (data) {
            $("#submenu").html(data);
        }
    });
}

function getSubtask(val) {
    $.ajax({
        type: "POST",
        url: "functions/getSubtask.php",
        data: 'id=' + val,
        success: function (data) {
            $("#subtask").html(data);
        }
    });
}

function getSubmenuPrice(val) {
    $.ajax({
        type: "POST",
        url: "functions/getSubmenuPrice.php",
        data: 'id=' + val,
        success: function (data) {
            $("#paidPrice").html(data);
        }
    });
}

function getSubtaskPrice(val) {
    $.ajax({
        type: "POST",
        url: "functions/getSubtaskPrice.php",
        data: 'id=' + val,
        success: function (data) {
            $("#paidPrice").html(data);
        }
    });
}

$(document).ready(function () {
    $("#member").click(function () {
        $("#memberForm").show();
        $("#customerForm").hide();
        $("#firstName").val("");
        $("#lastName").val("");
    });
    $("#customer").click(function () {
        $("#memberForm").hide();
        $("#customerForm").show();
        $("#memberSelect").prop('selectedIndex', 0);
    });
    $("#driver").click(function () {
        $("#driverSelect").toggle().prop('selectedIndex', 0);
    });
});