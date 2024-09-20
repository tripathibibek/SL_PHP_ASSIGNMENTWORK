<?php
//accessing data from form using $_GET method
// print_r($_GET);

// echo $_GET['full_name'];
// echo $_GET['email'];
// echo $_GET['contact'];
// echo $_GET['address'];
// echo $_GET['dob'];


//to handel unauthorized requests and empty http requests
if(isset($_GET['add_member'])){
//validate keys
if(empty($_GET['full_name']) || $_GET['full_name'] === ""){
    echo "full name is required";
    echo "<a href='index.php?status=401'>click here to add member</a>";
    exit;
}
$full_name = $_GET['full_name'];
$email = $_GET['email'];
$contact = $_GET['contact'];
$address = $_GET['address'];
$dob = $_GET['dob'];

echo"<h1> Form Data </h1>";
echo"<h3>Full Name : {$full_name}</h3>";
echo"<p>Email : {$email}</p>";
echo"Contact : {$contact}</p>";
echo"Address : {$address}</p>";
echo"Date of Birth : {$dob}</p>";
}else{
    echo "unauthorized request or empty http request";
    echo "<a href='index.php?status=401'>click here to add member</a>";
    exit;
}