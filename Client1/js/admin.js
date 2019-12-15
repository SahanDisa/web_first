function AddShop() {
    var x = document.getElementById("cusID").value;
    var y = document.getElementById("cusName").value;
    var letters = '/^[a-zA-Z]+$/';
    if ((parseInt(x) != (x)) && (y == parseInt(y))) {
        alert("Wrong Value Entered");
    } else {
        var rows = "";
        var id = document.getElementById("cusID").value;
        var name = document.getElementById("cusName").value;

        rows += "<tr><td>" + id + "</td><td>" + name + "</td></tr>";
        $(rows).appendTo("#cusTable1 tbody");
        alert("Added a SHOP Sucess");
    }
}
function AddLine() {
    var x = document.getElementById("lineID").value;
    var y = document.getElementById("lineName").value;
    var letters = '/^[a-zA-Z]+$/';
    if ((parseInt(x) != (x)) && (y == parseInt(y))) {
        alert("Wrong Value Entered");
    } else {
        var rows = "";
        var id = document.getElementById("lineID").value;
        var name = document.getElementById("lineName").value;

        rows += "<tr><td>" + id + "</td><td>" + name + "</td></tr>";
        $(rows).appendTo("#cusTable2 tbody");
        alert("Added a LINE Sucess");
    }
}