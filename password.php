<?php

function nass()
{
    echo "nass bite";
}
nass();

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l") . "<br>";

$d = mktime(21, 54, 45, 9, 21, 2013);
echo "created date is " . date("y/m/d h:i:s", $d) . "<br>";

$r = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $r) . "<br>";




?>
<?php

class nass
{
    const NASS = "This for visiting bigbee technology";
}
echo nass::NASS;

//prepare statments
$stmt = $conn->prepare("INSERT INTO msMarushwa (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstmane, $lastname, $email);
$stmt->execute();
echo "new record  created seccessfully";

//select stetment
$sql = "SELECT id, firstname, lastname, email FROM msMarushwa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " -name: " . $row["firstname"] . " " . $row["lastname"] . "<br";
    }
} else {

    echo "o result";
}

// select where 
$sql = "SELECT id, fristname, lastname, email FROM msMarushwa WHERE lastname = 'nass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " name: " . $row["fristname"] . " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 result";
}

//order by 
$sql = "SELECT id, firstname, lastname, email FROM msMarushwa ORDER BY lastname";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . "Name: " . $row["firstname"] . $row["lastname"];
    }
}
//delete
$sql = "DELETE FROM msMarushwa WHERE id=3";
if (mysqli_query($conn, $sql)) {
    echo "record deleted successfullu";
} else {
    echo "Error deleting record" . mysqli_error($conn);
}


// update database
$sql = "UPDATE msMarushwa SET lastname='bite' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "error occur :" . $conn->error;
}



?>

<?php

class nasss {

}

?>




