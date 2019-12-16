function CustomerDTO(id,name,address) {
    var _id=id;
    var _name=name;
    var _address=address;

    this.getCustomerID=function () {
        return _id;
    }
    this.getCustomerName=function () {
        return _name;
    }
    this.getCustomerAddress=function () {
        return _address;
    }
    this.setCustomerID=function (id) {
        _id=id;
    }
    this.setCustomerName=function (name) {
        _name=name;
    }
    this.setCustomerAddress=function (address) {
        _address=address;
    }
}