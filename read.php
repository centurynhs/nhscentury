<?php
$connect = new MongoClient("mongodb://admin:nhsadmin@ds147995.mlab.com:47995/centurynhs");
$db = $connect->centurynhs;
$collection = $db->photos;

$cursor = $collection->find();

foreach ($cursor as $document) {
    $photoData = $document['photo'];
    $decode = base64_decode($photoData);
    header('Content-type: image/jpeg');
    echo $decode;
    echo "<br>";
}

?>