function addCustomer(id,name,address) {
    var tempCustomer= new CustomerDTO(id,name,address);
    customer.push(tempCustomer);
}

function deleteCustomer() {

}
function AddData() {
    var x = document.getElementById("age").value;
    var y = document.getElementById("name").value;
    var letters = '/^[a-zA-Z]+$/';
    if ((parseInt(x) != (x)) && (y == parseInt(y))) {
        alert("Wrong Value Entered");
    } else {
        var rows = "";
        var name = document.getElementById("name").value;
        var gender = $('input[name="gender"]:checked').val();
        var address = document.getElementById("address").value;
        var age = document.getElementById("age").value;
        var city = document.getElementById("city").value;

        rows += "<tr><td>" + name + "</td><td>" + gender + "</td><td>" + address + "</td><td>" + age + "</td><td>" + city + "</td></tr>";
        $(rows).appendTo("#list tbody");
    }
}


$('#btnCustomer').click(function () {
   let customerid=$('#txtCusID').val();
   let customerName=$('#txtCusName').val();
   let customerAddress=$('#txtCusAddress').val();
   addCustomer(customerid,customerName,customerAddress);
});