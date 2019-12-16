<?php
/**
 * Created by IntelliJ IDEA.
 * User: sanu-vithanage
 * Date: 11/17/18
 * Time: 11:31 AM
 */

////php variables
//$temp=10;
////$34ndj=100;
//$_temp=100;
//
////Scalar types
////Boolean
////String
////Integer
////Float
//
//
////boolean
//$boolean1=true;
//$boolean2=false;
//var_dump($boolean1);
//echo "<br>";
//
////String
////sigle quto
//$str_single='This is for single quto';
////double quto
//$str_double="This is for double quto";
////both are valid string formats
//var_dump($str_double);
//echo "<br>";
//
//
////Interger
//$int=4294;
//
////binary 2 -> 0b[1-0]
////decimal 10 -> [0-9]
////octal 8 -> 0[0-7]
////hexadecimal -> 16 0x[0-9A-F]
//
//
////binary 2
//$binary=0b01;
//
////decimal 10
//$decimal= 6327;
//
////octal 0-7
//$octal=035;
//
////hexdecimal
//$hexdecimal=0x19AF;
//
////Float
//$float=100.00;
//$float=-100.00;
//var_dump($float);
//
//
////Compound Types
////Arrays
////Object
////iterable
////callable
//
//
////Arrays
////for store collection of data
//
////indexed arrays
////assosiative arrays
//echo "<br>";
//
////indexed arrays
//$tempIndexArray= array("A","B","C","D");
//var_dump($tempIndexArray);
//echo "<br>";
//echo $tempIndexArray[1];
//
////assosiative arrys
//echo "<br>";
//$tempAssosiativeArray=array("key1"=>"value1","A"=>"Car");
//echo $tempAssosiativeArray["A"];
//echo "<br>";
//
////Arrays crud operations
//$emptycrudArray=array();
//var_dump($emptycrudArray);
//echo "<br>";
//
////add a value
//$emptycrudArray[]="A";//0
//$emptycrudArray[]="B";//1
//var_dump($emptycrudArray);
//echo "<br>";
//
//
////delete value
//unset($emptycrudArray[1]);
//var_dump($emptycrudArray);
//echo "<br>";
//
//
////update value
//$emptycrudArray[0]="IJSE";
//var_dump($emptycrudArray);
//echo "<br>";
//
////search value
//echo $emptycrudArray[0];
//
//
////getAll values from a arrays list
//foreach ($emptycrudArray as $temp){
//    echo $temp."<br>";
//}
//

//
////Object
//class Customer
//{
//    function getAllCustomers()
//    {//method
//        echo "There are no customers to view <br>";
//    }
//
//    function addCustomer()
//    {//method
//        echo "Customer is Aded..! <br>";
//    }
//}
//
//$reference = new Customer();
//$reference->getAllCustomers();
//$reference->addCustomer();
//
//
////scope resolution operator
//Customer::getAllCustomers();


//acsess modifires
//private
//public
//default
//protected

//class Item
//{
//    function addItem_default()
//    {
//        echo "Item is aded<br>";
//    }
//
//    private function getAllItems_private()
//    {
//        echo "There are no items to view<br>";
//    }
//
//    protected function delete_Items_protected()
//    {
//        echo "Item deleted<br>";
//    }
//
//    public function searchItems_public()
//    {
//        echo "There is no item from that name<br>";
//    }
//}

//$itemReference = new Item();
//$itemReference->addItem_default();
//$itemReference->searchItems_public();
//
//
//class CustomerDTO
//{
//    public $id = "C001";
//    private $name = "Danuka";
//    protected $address = "Panadura";
//    public $salary = 100;
//
//    public function getCustomerName(){
//       return $this->name;
//    }
//
//}
//
//$customerDTOref = new CustomerDTO();
//echo $customerDTOref->salary;
////echo $customerDTOref->name;
////echo $customerDTOref->address;
//echo $customerDTOref->getCustomerName();
//echo "<br>";



//method return types

//$abc=100;
//class ItemDTO{
//    public function getOneItem($id):string {
//        return $id;
//    }
////    method overloading is disable
////    public function getOneItem():string {
////        return "Done";
////    }
//}
//
//
//$itemDTORef= new ItemDTO();
//echo $itemDTORef->getOneItem();


//overide and inheritance
//class A{
//    function testingA(){
//        echo "This is for testing Class A Method<br>";
//    }
//    function A_Test(){
//        echo "This is for A_test method <br>";
//    }
//
//}
//class B extends A{
//    //overridding
//    function A_Test(){
//        echo "This is for A_test method <br>";
//    }
//
//    function testingB(){
//        echo "This is for testing class B method<br>";
//    }
//}
//A::testingA();
//B::testingB();
//$ref= new A();
//$ref->testingA();
////$ref->testingA();
//B::A_Test();


//
//abstract class Vehicle{
//    public abstract function start();
//    public function abc(){
//
//    }
//}
//
//class Car extends Vehicle {
//    public function getCarName(){
//        echo "This is a BMW";
//    }
//
//    //over ride
//    public function start()
//    {
//        echo "The car started";
//    }
//}
//
//
//Car::start();
//Car::abc();

//interface Vehicle{
//    function start();
//}
//
//class Car implements Vehicle {
//
//    function start()
//    {
//
//
//    }
//}



//class CustomerDTO{
//    private $id;
//    private $name;
//    private $address;
//    private $salary;
//
//    /**
//     * CustomerDTO constructor.
//     * @param $id
//     * @param $name
//     * @param $address
//     * @param $salary
//     */
//    public function __construct($id, $name, $address, $salary)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->address = $address;
//        $this->salary = $salary;
//    }
//
//
//    /**
//     * @return mixed
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
//
//    /**
//     * @param mixed $id
//     */
//    public function setId($id): void
//    {
//        $this->id = $id;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAddress()
//    {
//        return $this->address;
//    }
//
//    /**
//     * @param mixed $address
//     */
//    public function setAddress($address): void
//    {
//        $this->address = $address;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    /**
//     * @param mixed $salary
//     */
//    public function setSalary($salary): void
//    {
//        $this->salary = $salary;
//    }
//
//
//}

//callable

//callabale simple functions
//function testing_callabale($name){
//    echo "this is for testing callabale function<br>";
//}
////calling method one
//testing_callabale("Ranuka Alvis");
////calling method two
//call_user_func("testing_callabale","Sanu");
//
////callable simple methods
//
//class Test{
//    function testingCallable_method($name){//method
//        echo "This is for testing callable method";
//    }
//}
//call_user_func("Test::testingCallable_method","Danuka");


//iterable
//function getAllItems(iterable $customerArray){
//    foreach ($customerArray as $temp){
//    echo $temp."<br>";
//    }
//}
//getAllItems(array("A","B","C","D","E"));



//special types
//$abcd;
//var_dump($abcd);
//echo "<br>";

//$variable=null;
//var_dump($variable);
//echo "<br>";
//
//$name="IJSE";
//var_dump($name);
//echo "<br>";
//unset($name);
//var_dump($name);


//others parts
//single time
//const CUSTOMER="Aravinda";
//echo CUSTOMER;
//
//define("ITEM","LUX");
//echo ITEM;
//
//const CUSTOMLIST =array("10",20);


//magic constant
//echo __DIR__." - Dir <br>";
//echo __FILE__." - file <br>";
//echo __CLASS__." class <br>";
//echo __FUNCTION__." function <br>";
//echo __LINE__." line number<br>";


//super globals

$tempvalue=100;
function testing(){
    global $tempvalue;
    echo $tempvalue;
}

testing();


//$_SERVER[];
//$_GET[];
//$_POST[];
//$_REQUEST[];
//$_FILES[];
//$_SESSION[];
//$_COOKIE[];

//controll structure
//if
//if(true){
//    echo "Yes the condtion is true";
//}else{
//    echo "No the condition is not true";
//}

//else if
//if (10>0){
//    echo "this is true (10>0)";
//}elseif (10>9){
//    echo "The condition is (10>9)";
//}elseif (10>11){
//    echo "The condition is (10>11)";
//}


//switch
//$source="IJSE";
//switch ($source){
//    case "IJSE":
//        echo "The value of source is IJSE";
//        break;
//    case "NIMB":
//        echo "The value of source is NIMB";
//        break;
//    default:
//        echo "There is nothing to view on source";
//}




//for
for($i=0;$i<10;$i++){
    echo $i."<br>";
}

//do while
$i=0;
do{
    $i++;
    echo $i;
}while($i<10);


//while
$i=0;
while($i<10){
    echo $i;
    $i++;
}

//foreach








