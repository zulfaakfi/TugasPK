<html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="jember";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error){
    die("connection failed: ". $conn->connect_error);

}
?>

<header>
    <title>Data Penduduk Jember</title>
    <link rel="stylesheet" href="stylesheet.css">
</header>

<body>
    <h1>Data Penduduk Jember</h1>
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM jember";
    $result = $conn->query($sql);
    if ($result->num_rows>0){
        //output data of each row
        while($row=$result->fetch_assoc()){
            echo $row["Kecamatan"]." ".$row["Pria"]. " ".$row["Perempuan"]." ".$row["Jumlah"]."<br>";
        }
    }else{
        echo"0 results";
    }
    $conn->close();
    
    ?>


</body>
<a href="http://localhost/hapusdata.php">hapus</a>
<a href="http://localhost/tambahdata.php">tambah</a>
</html>