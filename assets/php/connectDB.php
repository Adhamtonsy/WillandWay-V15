<?php
$Number_of_Trainings = $_POST['Trainings'];
$Number_of_VET = $_POST['VET'];
$Number_of_Job = $_POST['Job'];
$Number_of_Programs = $_POST['Programs'];
$Number_of_Trainees = $_POST['Trainees'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Feild: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into test_1 (Delivered_People, Number_of_VET, Job_Offers, Total_No_Of_The_VET, Total_No_Of_The_Trainees) values (?, ?, ?, ?, ?)");
    $stmt->bind_param("iiiii", $Number_of_Trainings, $Number_of_VET, $Number_of_Job, $Number_of_Programs, $Number_of_Trainees);
    $stmt->execute();
    $stmt->close();
}

// $sql = "SELECT ID FROM test_1";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         $res = "ID: " . $row["ID"] . "<br>";
//     }
//     $dom = new DOMDocument();
//     $html = file_get_contents('index.html');

//     @$dom->loadHTML($html);
//     $dom->getElementById('No1').value = $res;
//     echo $dom;
// } else {
//     echo "0 results";
// }
$conn->close();
