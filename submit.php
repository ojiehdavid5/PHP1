<?php
// $int=8;
// $float=8.0;
// echo "Integer: $int\n";
// echo "Float: $float\n";
// $age = 80;
// if ($age < 20) {
// echo "You are a teenager";
// }else{
//     echo "You are an adult";
// }
// for ($i=0; $i < 5; $i++) {
// echo "This is loop number $i\n";
// }
// $namesAge = array("Fabio"=>"20"
// ,
// "Klevi"=>"16"
// ,
// "John"=>"43");
// echo "Fabio’s age is "
// . $namesAge['Fabio'] . " years old.
// ";


//function in php
// function showGreeting($name) { // function definition
// echo "Hello "  .$name; // what this function does
// }

// showGreeting("chuks");


// function personProfile($name, $city, $job) { // function definition with arguments
// echo "This person is "
// .$name.
// " from "
// .$city.
// "
// .
// ";
// echo "";
// echo "His/Her job is "
// .$job.
// "
// .
// ";
// }
// personProfile("Fabio"
// ,
// "Tirana"
// ,
// "Web Dev");
// echo "";
// personProfile("Michael"
// ,
// "Athens"
// ,
// "Graphic Designer");
// echo "";
// personProfile("Xena"
// ,
// "London"
// ,
// "Tailor");


// $name = $_GET['name'];  // Gets 'John' from URL
// echo "Hello, $name";
// $username = $_POST['username'];
// echo "You entered: $username";


error_reporting(E_ALL);
ini_set("display_errors", 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && !empty($_POST["name"])) {
        $name = htmlspecialchars($_POST["name"]);  // Prevent XSS
        echo "Hello, $name!";
    } else {
        echo "Name is required.";
    }
} else {
    echo "Invalid request method.";
}

?>