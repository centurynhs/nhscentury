<?php
$connect = new MongoClient("mongodb://admin:nhsadmin@ds147995.mlab.com:47995/centurynhs");
$db = $connect->centurynhs;
$collection = $db->photos;

$photo_name = $_GET['photo'];

$cursor = $collection->find(array("name" => '$photoname'));

foreach ($cursor as $document) {
    $photoData = $document['photo'];
    $decode = base64_decode($photoData);
    header('Content-type: image/jpeg');
    echo $decode;
}

?>