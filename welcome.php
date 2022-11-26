<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is:<?php echo$_POST["email"];?>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="jember";
$Kecamatan=$_POST["Kecamatan"];
$Pria=$_POST["Pria"];
$Perempuan=$_POST["Perempuan"];
$Jumlah=$_POST["Jumlah"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO jember (Kecamatan, Pria, Perempuan, Jumlah)
VALUES ('Kesilir', '29938', '27626', '151050');";
$sql = "INSERT INTO jember (Kecamatan, Pria, Perempuan, Jumlah)
VALUES ('Pontang', '23456', '23478', '786542');";
$sql = "INSERT INTO jember (Kecamatan, Pria, Perempuan, Jumlah)
VALUES ('Tanjung_rejo', '56787', '34567', '876535');";

if($conn->multi_query($sql) === TRUE) {
    echo "New Records Created Successfully";
}else{
    echo 'Error: '. $sql . "<br>" . $conn->error;
}

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM jember";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo $row["Kecamatan"]." ". $row["Pria"]." ".$row["Perempuan"]. " ".$row["Jumlah"]."<br>";
    }
}else{
    echo"0 results";
}
$conn->close();
?>
<a href="http://localhost/tees.php">hapus</a>
<a href="http://localhost/tambahdata.php">tambah</a>

</body>
</html>