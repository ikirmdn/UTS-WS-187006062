<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "manutd") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');

$sql = "SELECT * FROM menplayers ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('menplayers');
    $track->addChild('id', $row['id']);
    $track->addChild('fullname', $row['fullname']);
    $track->addChild('level', $row['level']);
    $track->addChild('age', $row['age']);
    $track->addChild('country', $row['country']);
    $track->addChild('statistic', $row['statistic']);
   
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
