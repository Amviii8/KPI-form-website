<!DOCTYPE html>
<html>
<head>
<title>KEY PERFORMANCE INDICATOR (KPI) DURING PROBATIONARY PERIOD</title>
</head>
<body>
<left>
<center>
<?php
// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "pass1234", "KPI");
// Check connection
if($conn === false){
die("ERROR: Could not connect. "
. mysqli_connect_error());
}
// Taking all 5 values from the form data(input)
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $staffname = $_REQUEST['staffname'];
 $des = $_REQUEST['des'];
 $dep = $_REQUEST['dep'];
 $evperiod = $_REQUEST['evperiod'];
 $date = $_REQUEST['date'];
 $task = $_REQUEST['task'];
 $exd = $_REQUEST['exd'];
 $datel = $_REQUEST['datel'];
 $rem = $_REQUEST['rem'];
$task2 = $_REQUEST['task2'];
 $exd2 = $_REQUEST['exd2'];
 $datel2 = $_REQUEST['datel2'];
 $rem2 = $_REQUEST['rem2'];
$task3 = $_REQUEST['task3'];
 $exd3 = $_REQUEST['exd3'];
 $datel3 = $_REQUEST['datel3'];
 $rem3 = $_REQUEST['rem3'];
$task4 = $_REQUEST['task4'];
 $exd4 = $_REQUEST['exd4'];
 $datel4 = $_REQUEST['datel4'];
 $rem4 = $_REQUEST['rem4'];
$task5 = $_REQUEST['task5'];
 $exd5 = $_REQUEST['exd5'];
 $datel5 = $_REQUEST['datel5'];
 $rem5 = $_REQUEST['rem5'];
$task6 = $_REQUEST['task6'];
 $exd6 = $_REQUEST['exd6'];
 $datel6 = $_REQUEST['datel6'];
 $rem6 = $_REQUEST['rem6'];
$task7 = $_REQUEST['task7'];
 $exd7 = $_REQUEST['exd7'];
 $datel7 = $_REQUEST['datel7'];
 $rem7 = $_REQUEST['rem7'];

 
 // Performing insert query execution
 // here our table name is college
 $sql = "INSERT INTO staff_info (staffname, des, dep, evperiod,date, task, exd, datel, rem, task2, exd2, datel2, rem2, task3, exd3, datel3, rem3, task4, exd4, datel4, rem4,
                                  task5, exd5, datel5, rem5, task6, exd6, datel6, rem6, task7, exd7, datel7, rem7)
 VALUES ('$staffname','$des','$dep','$evperiod','$date',
 '$task', '$exd','$datel','$rem', '$task2', '$exd2','$datel2','$rem2',
 '$task3', '$exd3','$datel3','$rem3', '$task4', '$exd4','$datel4','$rem4',
 '$task5', '$exd5','$datel5','$rem5', '$task6', '$exd6','$datel6','$rem6',
 '$task7', '$exd7','$datel7','$rem7')";

 
 if(mysqli_query($conn, $sql)){
 echo "<left><h3>Data has been  stored in a database successfully."
 . " Please browse your localhost php my admin"
 . " to view the updated data</h3></left>";
 echo nl2br("<left>Data for:$staffname\n Designation: $des\n "
 . "Department:$dep\n Evaluation Period:$evperiod\n Date:$date\n</left> ");
 } else{
 echo "ERROR: Hush! Sorry $sql. "
 . mysqli_error($conn);
 }
 }

// Close connection
mysqli_close($conn);
?>
</center>
</body>
</html>
